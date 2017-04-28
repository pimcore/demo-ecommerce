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

// if now values available, skip this filter
if(count($this->values) === 0)
{
    return;
}

$currentValue = $this->currentValue ? $this->currentValue : [];

?>


<div class="filter">

    <h4><?= $this->translate(mb_strtolower(trim("general.filters." . $this->label))) ?></h4>
    <div class="form-inline">
        <div class="form-group">
            <label class="sr-only"><?= $this->translate("general.filters.from") ?></label>
            <input name="<?= $this->fieldname ?>[from]" type="number" value="<?= $currentValue['from'] ?>" class="form-control" placeholder="<?= $this->translate("general.filters.from") ?>">
        </div>
        <div class="form-group">
            <label class="sr-only"><?= $this->translate("general.filters.to") ?></label>
            <input name="<?= $this->fieldname ?>[to]" type="number" value="<?= $currentValue['to'] ?>" class="form-control" placeholder="<?= $this->translate("general.filters.to") ?>">
        </div>
        <button type="submit" class="btn btn-default"><?= $this->translate("general.filters.go") ?></button>
    </div>

</div>

