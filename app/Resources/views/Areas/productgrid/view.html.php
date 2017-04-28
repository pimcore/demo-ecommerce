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


$filterDefinitionObject = $this->filterDefinitionObject;

$params = $this->getAllParams();

?>

<?php if ($this->editmode) { ?>
    <div class="span3">
    </div>
    <div class="span9">
        <h2>ProductFilter Object</h2>

        <div>
            <?php echo $this->href('productFilter', array('types' => array('object'), 'subtypes' => array('object' => array('object')), 'classes' => array('FilterDefinition'))); ?>
        </div>
    </div>

    <div style="clearfix"></div>

<?php } ?>

<?php if (!$this->href("productFilter")->isEmpty()) { ?>

    <?= $this->action("list", "shop", null, array_merge($params, ["filterdefinition" => $filterDefinitionObject, "noLayout" => true])) ?>

<?php } ?>

