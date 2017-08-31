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


/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

?>

<?php if($this->editmode) { ?>
    <h3><?= $this->input("headline") ?></h3>
    <p><?= $this->textarea("headtext") ?></p>

    <?= $this->outputchanneltable("tableconfig", [
        'selectedClass' => 'Product',
        'disableClassSelection' => true,
        'disableFavoriteOutputChannel' => true
    ]) ?>
<?php } else { ?>

    <div class="headline">
        <h3><?php echo $this->input("headline") ?></h3>
        <p><?php echo $this->textarea("headtext") ?></p>
    </div>
    <?php
        $configArray = [];
        if($this->outputchanneltable("tableconfig")->getOutputChannel()) {
            $configArray = \OutputDataConfigToolkitBundle\Service::buildOutputDataConfig($this->outputchanneltable("tableconfig")->getOutputChannel());
        }
        ?>
    <table class="outputchannel">
        <?= $this->template(":Areas:print-product-table/specAttribute/column-attribute-table.html.php", [
            "configArray" => $configArray,
            "classname" => "Pimcore\\Model\\DataObject\\" . $this->outputchanneltable("tableconfig")->getSelectedClass(),
            "elements" => $this->outputchanneltable("tableconfig"),
            "thumbnailName" => "print_image_small"
        ]); ?>
    </table>

<?php } ?>
