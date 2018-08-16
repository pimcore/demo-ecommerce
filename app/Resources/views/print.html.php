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


?>

<!DOCTYPE html>
<html lang="<?= $this->language; ?>">
<head>
    <link rel="stylesheet" type="text/css" href="/static/css/print-style.css"/>

    <?php if($this->document->getProperty("sidebar")) { ?>
        <?= $this->inc($this->document->getProperty("sidebar"), array("stylesheet" => true, "printermarks" => $this->printermarks)); ?>
    <?php } ?>

    <link rel="stylesheet" type="text/css" href="/static/css/print-edit.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/static/css/print-preview.css" media="screen" />

    <?php if($this->printermarks) { ?>
        <link rel="stylesheet" type="text/css" href="/bundles/pimcoreadmin/css/print/print-printermarks.css" media="print" />
    <?php } ?>


    <script type="text/javascript" src="/static/js/jquery-1.11.0.min.js"></script>

    <?= $this->headLink() ?>
    <?= $this->headScript() ?>


    <style type="text/css">

        <?php $categories = \AppBundle\Model\ShopCategory::getTopLevelCategories(); ?>

        <?php foreach($categories as $category) { ?>

        @page <?= $category->getName('en_GB') ?>:right {
            @left-top {
                content: xhtml("<div class='register left register-<?= $category->getName('en_GB') ?>'><?= $category->getName() ?></div>");
                z-index: 2000;
            }
        }

        @page <?= $category->getName('en_GB') ?>:left {
            @right-top {
                content: xhtml("<div class='register register-<?= $category->getName('en_GB') ?>'><?= $category->getName() ?></div>");
                z-index: 2000;
            }
        }
        <?php } ?>

    </style>



</head>

<body>
<div class="site">
    <?php $this->slots()->output('_content') ?>
</div>



<?= $this->inlineScript() ?>

</body>
</html>
