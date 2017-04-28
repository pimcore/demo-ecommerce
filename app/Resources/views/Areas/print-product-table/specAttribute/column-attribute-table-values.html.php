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


    $count = 0;
    $totalCount = count($this->configArray);
?>

<?php foreach($this->elements as $element) { ?>
    <?php if(!$this->subgroup) { ?>
        <tr class=" <?= ($count % 2 == 0) ? 'even' : '' ?>">
    <?php } ?>
        <?php $isFistColumn = true; ?>
        <?php foreach($this->configArray as $configElement) { ?>

            <?php if($configElement instanceof \OutputDataConfigToolkitBundle\ConfigElement\Operator\Group) { ?>
                <?= $this->template(":Areas:print-product-table/specAttribute/column-attribute-table-values.php",
                    array("configArray" => $configElement->getChilds(), "elements" => array($element), "subgroup" => $this->subgroup + 1));
                ?>
            <?php } else { ?>
                <?php if($element instanceof \Web2PrintToolsBundle\Document\Tag\Outputchanneltable\MetaEntry\Defaultentry) { ?>
                    <?php if($element->getSpan()) { ?>
                        <?php if($isFistColumn && !$this->subgroup) { ?>
                            <td class="metaentry" colspan="<?=$totalCount ?>"><?= $element->getValue() ?></td>
                        <?php } ?>
                    <?php } else { ?>
                        <td class="metaentry"><?= $element->getValue() ?></td>
                    <?php } ?>
                <?php } else if($element instanceof \Web2PrintToolsBundle\Document\Tag\Outputchanneltable\MetaEntry\Table) { ?>
                    <?php
                        if($isFirst && !$this->subgroup) {
                            $element->resetNextValue();
                        }
                        $value = $element->getNextValue();
                    ?>
                    <?php if($value) { ?>
                        <td colspan="<?=$value['span'] ?>"><?= $value['value'] ?></td>
                    <?php } ?>
                <?php } else { ?>
                    <td>
                        <?php $outputElement = $configElement->getLabeledValue($element); ?>
                        <?= $this->template(":Areas:print-product-table/specAttribute/spec-value.html.php",
                                            array("outputElement" => $outputElement, "thumbnailName" => $this->thumbnailName))
                        ?>
                    </td>
                <?php } ?>
            <?php } ?>
            <?php $isFistColumn = false; ?>
        <?php } ?>

    <?php if(!$this->subgroup) { ?>
        </tr>
        <?php $count++ ?>
    <?php } ?>
<?php } ?>
