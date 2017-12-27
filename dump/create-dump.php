<?php

include_once(__DIR__ . "/../../../../pimcore/config/startup_cli.php");

$databaseConfig = Pimcore\Config::getSystemConfig()["database"]["params"];


// get tables which are already in install.sql
$installSql = file_get_contents(PIMCORE_PROJECT_ROOT . "/pimcore/lib/Pimcore/Install/Resources/install.sql");
preg_match_all("/CREATE TABLE `(.*)`/", $installSql, $matches);
$existingTables = $matches[1];


$db = \Pimcore\Db::get();
$databaseName = $db->getDatabase();

$tablesRaw = $db->fetchAll("SHOW FULL TABLES");

$views = [];
$tables = [];

foreach($tablesRaw as $table) {
    if($table["Table_type"] == "VIEW") {
        $views[]  = current($table);
    } else {
        $tables[] = current($table);
    }
}


$dumpData = "\nSET NAMES utf8mb4;\n\n";


// dump table schema, without the tables in install.sql
foreach ($tables as $name) {
    if (in_array($name, $existingTables)) {
        continue;
    }

    $dumpData .= "\n\n";
    $dumpData .= "DROP TABLE IF EXISTS `" . $name . "`;";
    $dumpData .= "\n";

    $tableData = $db->fetchRow("SHOW CREATE TABLE " . $name);

    $dumpData .= $tableData["Create Table"] . ";";

    $dumpData .= "\n\n";
}

$dumpData .= "\n\n";

$tableBlacklist = [
    'application_logs',
    'cache',
    'cache_tags',
    'edit_lock',
    'email_log',
    'http_error_log',
    'locks',
    'tmp_store',
    'targeting_storage',
    'tracking_events',
    'versions'
];

// dump data
foreach ($tables as $name) {

    if (strstr($name, "application_logs") || in_array($name, $tableBlacklist)) {
        continue;
    }

    $filename = "dumpexport-" . $name . ".csv";
    $fullFilename = __DIR__ . "/data/" . $filename;
    if(file_exists($fullFilename)) {
        unlink($fullFilename);
    }

    $quotedName = $db->quoteIdentifier($name);

    //special hack to export blob column of activities table
    if($name == 'plugin_cmf_activities') {

        $db->query("SELECT id, customerId, activityDate, type, implementationClass, o_id, a_id, hex(attributes), md5, creationDate, modificationDate FROM " . $quotedName . " INTO OUTFILE '" . $fullFilename . "'");
        $dumpData .= "LOAD DATA LOCAL INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/" . $filename . "' INTO TABLE " . $quotedName .
            "(id, customerId, activityDate, type, implementationClass, o_id, a_id, @hexAttributes, md5, creationDate, modificationDate) SET attributes=UNHEX(@hexAttributes);\n";

    } else {

        $db->query("SELECT * FROM " . $quotedName . " INTO OUTFILE '" . $fullFilename . "'");
        $dumpData .= "LOAD DATA LOCAL INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/" . $filename . "' INTO TABLE " . $quotedName . ";\n";
    }

}

foreach($views as $name) {
    // dump view structure
    $dumpData .= "\n\n";
    $dumpData .= "DROP VIEW IF EXISTS " . $name . ";";
    $dumpData .= "\n";

    try {
        $viewData = $db->fetchRow("SHOW CREATE VIEW " . $name);
        $dumpData .= $viewData["Create View"] . ";";
    } catch (\Exception $e) {
        echo $e->getMessage() . "\n";
    }
}


// remove user specific data
$dumpData = preg_replace("/DEFINER(.*)DEFINER/i", "", $dumpData);

$finalDest = __DIR__ . "/data.sql";
file_put_contents($finalDest, $dumpData);

echo "Dump is here: " . $finalDest . "\n";
