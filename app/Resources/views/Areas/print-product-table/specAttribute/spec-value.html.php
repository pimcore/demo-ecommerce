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

<?php if(!is_object($this->outputElement->value)) { ?>

    <?php
        if($this->outputElement->def instanceof \Pimcore\Model\DataObject\ClassDefinition\Data\Select) {
            $value = $this->translateAdmin($this->outputElement->value);
        } else if($this->outputElement->def instanceof \Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect) {

            $value = [];
            if($this->outputElement->value) {
                foreach($this->outputElement->value as $v) {
                    $value[] = $this->translateAdmin($v);
                }
            }

            $value = implode(", ", $value);

        } else if($this->outputElement->def instanceof \Pimcore\Model\DataObject\ClassDefinition\Data\Objects) {

            $value = [];
            if($this->outputElement->value) {
                foreach($this->outputElement->value as $v) {
                    if(method_exists($v, "getName")) {
                        $value[] = $v->getName();
                    }
                }
            }

            $value = implode(", ", $value);

        } else {
            $value = $this->outputElement->value;
        }
    ?>

    <?= $value ?>

<?php } else if($this->outputElement->value instanceof \Pimcore\Model\Asset\Image) { ?>

    <img src="<?= $this->outputElement->value->getThumbnail($this->thumbnailName)?>" alt="image" />

<?php } else if($this->outputElement->value instanceof \Pimcore\Model\DataObject\ClassDefinition\Data\StructuredTable) { ?>
    <?php
        $cols = array();
        $colKeys = array();
        foreach($this->outputElement->def->getCols() as $c) {
            $cols[] = $this->view->translateAdmin($c["label"]);
            $colKeys[] = $c["key"];
        }

        $rows = array();
        $rowKeys = array();
        foreach($this->outputElement->def->getRows() as $r) {
            $rows[] = $this->view->translateAdmin($r["label"]);
            $rowKeys[] = $r["key"];
        }

        $value = $this->outputElement->value;
    ?>

    <table class="table">
        <tr class="subTableHeader">
            <th></th>
            <?php foreach($cols as $c) { ?>
            <td class="txtCenter width80"><?= $c ?></td>
            <?php } ?>
        </tr>

        <?php foreach($rows as $i => $r) { ?>

        <tr>
            <td class="subTableHeader">
                <?= $r ?>
            </td>

            <?php foreach($colKeys as $c) { ?>
                <?php
                    $rKey = $rowKeys[$i];
                    $getter = "get" . $rKey . "__" . $c;
                ?>

                <td class="txtCenter"><?= $value->$getter()?></td>
            <?php } ?>

        </tr>
        <?php } ?>

    </table>
<?php } ?>
