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


$levels =  \Web2PrintToolsBundle\Tools\Tool::getMaxGroupDepth($this->configArray);

?>

<thead>
    <?= $this->template(":Areas:print-product-table/specAttribute/column-attribute-table-header.html.php",
        ["configArray" => $this->configArray, "classname" => $this->classname, "levels" => $levels, "currentLevel" => 0]);
    ?>
</thead>

<tbody>
    <?= $this->template(":Areas:print-product-table/specAttribute/column-attribute-table-values.html.php",
        ["configArray" => $this->configArray, "elements" => $this->elements, "thumbnailName" => $this->thumbnailName]);
    ?>
</tbody>
