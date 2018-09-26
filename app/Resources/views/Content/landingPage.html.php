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

$this->extend('layout.html.php');
?>


<?= $this->template(":Includes:content-headline.html.php"); ?>

<?= $this->areablock("precontent",
    array(
        "allowed" => array(
            "gallery-carousel",
            "wysiwyg",
            "horizontal-line",
            "icon-teaser-row",
            "productteaser"
        ))) ?>

<?= $this->areablock("content", array("allowed"=>array("productgrid", "limit" => 1))) ?>
