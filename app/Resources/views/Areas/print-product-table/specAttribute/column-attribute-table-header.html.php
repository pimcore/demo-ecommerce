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

    <tr>
        <?php foreach($this->configArray as $configElement) { ?>

            <?php if($configElement instanceof \OutputDataConfigToolkitBundle\ConfigElement\Operator\Group) { ?>

                <td colspan="<?=count($configElement->getChilds()) ?>">
                    <?php $classname = $this->classname;?>
                    <?= $configElement->getLabel() ?>
                </td>

                <?= $this->template(":Areas:print-product-table/specAttribute/column-attribute-table-header.php",
                    array("configArray" => $configElement->getChilds(), "classname" => $this->classname, "levels" => $this->levels, "currentLevel" => $this->currentLevel + 1));
                ?>


            <?php } else { ?>
                <td rowspan="<?= $this->levels - $this->currentLevel ?>">
                    <?php $classname = $this->classname;?>
                    <?= $configElement->getLabeledValue(new $classname())->label ?>
                </td>
            <?php } ?>
        <?php } ?>
    </tr>
