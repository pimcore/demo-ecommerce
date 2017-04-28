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

if(!$this->document->getProperty("hide-layout")) {
    $this->extend('print.html.php');
}

?>


<div class="page <?= $this->document->getProperty("category") ?>" id="documentpage-<?= $this->document->getId() ?>">

    <div>

        <?= $this->areablock("content", [
            'allowed' => ['print-title-page', 'print-toc', 'print-page-break', 'print-wysiwyg', 'print-key-visual', 'print-product-row', 'print-product-table']
        ]) ?>

    </div>

</div>
