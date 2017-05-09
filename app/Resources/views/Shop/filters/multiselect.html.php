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

// ...
if(empty($this->currentValue))
{
    $this->currentValue = array();
}

//
$values = array();
foreach($this->values as $value)
{
    if(!empty($value['value']))
        $values[] = $value;
}

// if now values available, skip this filter
if(count($values) === 0)
{
    return;
}
?>
<div class="filter">
    <h4><?= $this->translate("general.filters." . $this->label) ?></h4>

    <ul class="list-unstyled">
        <?php foreach($values as $value) { ?>

            <?php
                $checked = in_array($value['value'], $this->currentValue);

                $label = $checked ? '<b>%s</b>' : '%s';
                $label = sprintf($label, $this->translate(mb_strtolower(sprintf("general.filters.%s.%s", $this->label, $value['value']))));
            ?>


            <li class="ui-state-default">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="<?= $value['value'] ?>" <?= $checked ? 'checked="checked"' : '' ?> name="<?= $this->fieldname ?>[]">
                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                        <?= $label ?> <span class="badge pull-right"><?=$value['count'] ?></span>
                    </label>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
