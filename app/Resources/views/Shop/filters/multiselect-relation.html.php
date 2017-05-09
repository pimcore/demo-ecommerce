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

<?php if(sizeof($this->values)) {?>

    <?php
        if(empty($this->currentValue)) {
            $this->currentValue = array();
        }
    ?>

    <div class="filter">
        <h4><?= $this->translate(mb_strtolower("general.filters." . $this->label)) ?></h4>

        <ul class="list-unstyled">
            <?php foreach($this->values as $value) { ?>
                <?php
                    $checked = in_array($value['value'], $this->currentValue);

                    $label = $checked ? '<b>%s</b>' : '%s';
                    $label = sprintf($label, $this->objects[$value['value']]->getName());
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

<?php }?>
