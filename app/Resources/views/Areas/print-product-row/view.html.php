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


$leftMode = $this->select("mode")->getValue() == "left";

?>


<?php if($this->editmode) { ?>

    <div class="displaymode">
        <div>Display Mode:</div>
        <?= $this->select("mode", [
            "reload" => true,
            "store" => [
                ["left", "Left wide"],
                ["right", "Right wide"]
            ]
        ]); ?>
    </div>


<?php } ?>


<div class="productrow">

    <div class="element first <?= $leftMode ? 'wide' : 'small' ?>">
        <?php echo $this->renderlet("productteaser1", array(
            "controller" => "web2print",
            "action" => "product-cell",
            "type" => "object",
            "className" => "Product",
            "editmode" => $this->editmode,
            "title" => "Drag a product here",
            "height" => 350,
            "mode" => $leftMode ? '' : 'small'
        )); ?>
    </div>

    <div class="element <?= $leftMode ? 'small' : 'wide' ?>">
        <?php echo $this->renderlet("productteaser2", array(
            "controller" => "web2print",
            "action" => "product-cell",
            "type" => "object",
            "className" => "Product",
            "editmode" => $this->editmode,
            "title" => "Drag a product here",
            "height" => 350,
            "mode" => $leftMode ? 'small' : 'wide'
        )); ?>
    </div>

    <div class="clear"></div>

</div>
