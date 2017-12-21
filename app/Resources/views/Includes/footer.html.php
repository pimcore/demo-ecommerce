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


<?php if($this->editmode) { // styles only for editmode ?>
    <link rel="stylesheet" href="/static/css/global.css">
<?php } ?>

<!-- FOOTER -->
<footer>
    <p class="pull-right">
        <?php
        $footerContent = $this->input('footer_content');
        ?>

        <?php if ($this->editmode): ?>
            <?= $footerContent ?>
        <?php elseif (!$this->editmode && !empty($footerContent->getData())): ?>
            <?= $footerContent ?> -
        <?php endif ?>

        <a href="#"><?= $this->translate("Back to top"); ?></a>
    </p>
    <p class="links">&copy; <?= date("Y"); ?> pimcore GmbH &middot;
        <?php while($this->block("links")->loop()) { ?>
            <?= $this->link("link"); ?>
        <?php } ?>
    </p>
</footer>
