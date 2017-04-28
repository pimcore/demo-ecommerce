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

<div class="title-page-container">

    <?= $this->image("backgroundimage", ['thumbnail' => 'print_backgroundimage', 'class' => 'background']) ?>

    <div class="img-container">
        <?= $this->image("titleimage", ['thumbnail' => 'print_titleimage', 'class' => 'title']) ?>
    </div>

    <div class="heading"><?= $this->input("heading") ?></div>
    <div class="subheading"><?= $this->input("subheading") ?></div>

</div>
