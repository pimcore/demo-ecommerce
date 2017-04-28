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


    $steps = [
        'delivery' => $this->pimcoreUrl(["action" => 'delivery', "language" => $this->language], "checkout", true),
        'confirm' =>  $this->pimcoreUrl(["action" => 'confirm', "language" => $this->language], "checkout", true),
        'payment' => $this->pimcoreUrl(["controller" => "payment", "action" => 'payment', "prefix" => $this->language], "action", true),
        'completed' => ""
    ];
?>

<div class="row">

    <?php
    $this->headLink()->appendStylesheet('/static/css/shop-homepage.css', "screen");
    ?>
    <div class="row bs-wizard" style="border-bottom:0;">

        <?php $completed = true ?>
        <?php foreach($steps as $step => $url) { ?>

            <?php
                $active = false;
                if($this->currentStep == $step) {
                    $completed = false;
                    $active = true;
                }
            ?>
            <div class="col-xs-3 bs-wizard-step <?= $completed ? "complete" : ($active ? "active" : "disabled") ?>">
                <div class="text-center bs-wizard-stepnum"><?= $this->translate("checkout.steps." . $step) ?></div>
                <div class="progress"><div class="progress-bar"></div></div>
                <?php if($url && !$this->noLinks) { ?>
                    <a href="<?= $url ?>" class="bs-wizard-dot"></a>
                <?php } else { ?>
                    <span class="bs-wizard-dot"></span>
                <?php } ?>
            </div>

        <?php } ?>
    </div>

</div>
