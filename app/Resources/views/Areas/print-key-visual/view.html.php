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

<div class="keyvisual">
    <?= $this->image("keyvisual", [
        "thumbnail" => "print_keyvisual"
    ]) ?>
</div>

<p class="headline">
    <?= $this->input("headline"); ?>
</p>


<?php if(!$this->editmode) { ?>
    <div class="footer-text-placeholder-left"><?= $this->input("headline"); ?></div>
    <div class="footer-text-placeholder-right"><?= $this->input("headline"); ?></div>
<?php } ?>
