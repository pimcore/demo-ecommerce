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

<section class="area-gallery-single-images">

    <div class="row">
        <?php
        $block = $this->block("gallery");

        while ($block->loop()) { ?>
            <div class="col-md-3 col-xs-6">
                <?php if(!$this->editmode) { ?>
                    <a href="<?= $this->image("image")->getThumbnail("galleryLightbox"); ?>" class="thumbnail">
                <?php } ?>

                    <?= $this->image("image", [
                        "thumbnail" => "galleryThumbnail"
                    ]); ?>

                <?php if(!$this->editmode) { ?>
                    </a>
                <?php } ?>
            </div>
        <?php } ?>
    </div>

</section>

