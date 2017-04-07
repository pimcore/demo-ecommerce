<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */


?>

<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js"> <!--<![endif]-->
<?php
    // get root node if there is no document defined (for pages which are routed directly through static route)
    if(!$this->document instanceof \Pimcore\Model\Document) {
        $this->document = \Pimcore\Model\Document::getById(1);
    }
?>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="/static/bootstrap/css/bootstrap.css" type="text/css"/>
    <script src="/static/js/jquery-1.11.0.min.js"></script>

</head>

<body>

<?php $this->slots()->output('_content') ?>

<!-- custom scripts file -->

<?= $this->headScript() ?>

</body>
</html>