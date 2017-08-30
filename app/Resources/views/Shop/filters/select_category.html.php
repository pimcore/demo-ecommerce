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

// init
$values = $this->values;

// resort values
$valuesIndex = array();
foreach($this->values as $entry)
{
    $valuesIndex[ $entry['value'] ] = $entry['count'];
}

$currentCategory = null;

// categories to show
if($this->currentValue) {
    $currentCategory = Pimcore\Model\DataObject\ProductCategory::getById( $this->currentValue );
}

$parentCategories = [];
$subCategories = [];
if($currentCategory) {
    $parentCategories = $currentCategory->getParentCategoryList($this->rootCategory, $this->document);

    foreach($currentCategory->getChildren() as $subCategory) {
        $subCategories[] = $subCategory;
    }

} else {

    $subCategories = \AppBundle\Model\ShopCategory::getTopLevelCategories();

}

?>

<div class="filter-categories">

    <h4><?= $this->translate(mb_strtolower("general.filters." . $this->label)) ?></h4>
    <div class="list-group">
        <!-- parent categories -->
        <?php foreach($parentCategories as $parentCategory) { ?>
            <?php $url = $parentCategory->getDetailUrl(["rootCategory" => $this->rootCategory, "document" => $this->document]); ?>
            <a href="<?= $url ?>" class="list-group-item"><span class="glyphicon glyphicon-chevron-left"></span> <?= $parentCategory->getName() ?> </a>
        <?php } ?>

        <!-- current category -->
        <?php if($currentCategory) { ?>
            <input type="hidden" name="parentCategoryIds" value="<?= $currentCategory->getId() ?>" />
            <span class="list-group-item active2"><strong><?= $currentCategory->getName() ?></strong> <span class="badge"><?= $valuesIndex[$currentCategory->getId()] ?></span> </span>
        <?php } ?>

        <!-- sub categories -->
        <?php foreach($subCategories as $subCategory) { ?>
            <?php $url = $subCategory->getDetailUrl(["rootCategory" => $this->rootCategory, "document" => $this->document]); ?>

            <a href="<?= $url ?>" class="list-group-item"><span class="glyphicon glyphicon-chevron-right"></span> <?= $subCategory->getName() ?> <span class="badge"><?= $valuesIndex[$subCategory->getId()] ?></span></a>

        <?php } ?>
    </div>

</div>
