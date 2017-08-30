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

    $values = $this->values;

    @usort($values, function($left, $right) {

        $object = \Pimcore\Model\DataObject\AbstractObject::getById($left["value"]);
        if($object) {
            $nameLeft = $object->getName();
        }

        $object = \Pimcore\Model\DataObject\AbstractObject::getById($right["value"]);
        if($object) {
            $nameRight = $object->getName();
        }

        return strcmp($nameLeft, $nameRight);

    });

    if(count($values) == 0) {
        return;
    }

?>



<div class="filter">

    <div class="filter">
        <h4><?= $this->translate(mb_strtolower("general.filters." . $this->label)) ?></h4>

        <ul class="list-unstyled">
            <li class="ui-state-default">
                <div class="radio">
                    <label>
                        <input type="radio" value="<?= \Pimcore\Bundle\EcommerceFrameworkBundle\FilterService\FilterType\AbstractFilterType::EMPTY_STRING ?>" name="<?= $this->fieldname ?>">
                        <?= $this->translate("general.filters.all") ?>
                    </label>
                </div>
            </li>

            <?php foreach($this->values as $value) { ?>
                <?php $object = $this->objects[$value['value']] ?>
                <?php if($object && $object->isPublished()) { ?>

                    <?php
                    $checked = $this->currentValue == $value['value'];

                    $label = $checked ? '<b>%s</b>' : '%s';
                    $label = sprintf($label, $this->objects[$value['value']]->getName());
                    ?>

                    <li class="ui-state-default">
                        <div class="radio">
                            <label>
                                <input type="radio" value="<?= $value['value'] ?>" <?= $checked ? 'checked="checked"' : '' ?> name="<?= $this->fieldname ?>">
                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                <?= $label ?> <span class="badge pull-right"><?=$value['count'] ?></span>
                            </label>
                        </div>
                    </li>

                <?php } ?>
            <?php } ?>
        </ul>
    </div>

</div>
