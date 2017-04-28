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

    if($this->showLayout) {
        $this->extend('layout.html.php');
    }

    $this->headLink()->appendStylesheet('/static/css/shop-homepage.css', "screen");

    $this->headScript()->appendFile('/static/js/productfilters.js');
?>

<?php if(count($this->products) == 0) { ?>
    <h3><?= $this->translate("shop.empty-result") ?></h3>
<?php } else { ?>

<form class="row" id="js_filterfield" action="" method="get">
    <div class="col-md-3">
        <div id="sidebar" class="sidebar-left">
            <?php if($this->filterDefinitionObject->getFilters()): ?>
                <div class="widget">
                    <?php foreach ($this->filterDefinitionObject->getFilters() as $filter): ?>
                        <?= $this->filterService->getFilterFrontend($filter, $this->products, $this->currentFilter);?>
                    <?php endforeach; ?><!-- end widget -->
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-md-9">
        <h1 class="page-title"><?= $this->category ? $this->category->getName() : "" ?></h1>

        <?= $this->render(
            "Shop/includes/pagination.html.php",
            get_object_vars($this->paginator->getPages("Sliding"))
        ); ?>

        <div class="productList" id="js-productlist">
            <?= $this->template(':Shop/list:products.html.php', array('products' => $this->products)) ?>
        </div>

        <?= $this->render(
            "Shop/includes/pagination.html.php",
            get_object_vars($this->paginator->getPages("Sliding"))
        ); ?>

    </div>
</form>

<?php } ?>
