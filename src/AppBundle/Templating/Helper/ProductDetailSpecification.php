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

namespace AppBundle\Templating\Helper;

use OutputDataConfigToolkitBundle\ConfigElement\Operator\Concatenator;
use OutputDataConfigToolkitBundle\ConfigElement\Operator\Group;
use OutputDataConfigToolkitBundle\ConfigElement\Value\DefaultValue;
use Pimcore\Localization\IntlFormatter;
use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\DataObject\ClassDefinition\Data\Checkbox;
use Pimcore\Model\DataObject\ClassDefinition\Data\Image;
use Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect;
use Pimcore\Model\DataObject\ClassDefinition\Data\Objects;
use Pimcore\Model\DataObject\ClassDefinition\Data\Select;
use Symfony\Component\Templating\Helper\Helper;
use Symfony\Component\Translation\TranslatorInterface;

class ProductDetailSpecification extends Helper
{
    /**
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * @var IntlFormatter
     */
    protected $formatter;

    public function __construct(TranslatorInterface $translator, IntlFormatter $formatter)
    {
        $this->translator = $translator;
        $this->formatter = $formatter;
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return 'productDetailSpecification';
    }

    public function __invoke($property, $product)
    {
        if ($property instanceof Group) {
            $labeledValue = $property->getLabeledValue($product);
            if ($labeledValue) {
                $result = "
                            <tr class='groupheading' >
                                <th colspan='2'>" . $this->translator->trans(mb_strtolower('attr.' . $property->getLabel())) . '</th>
                            </tr>
                ';

                foreach ($property->getChilds() as $child) {
                    $result .= $this->__invoke($child, $product);
                }

                return $result;
            }
        } elseif ($property instanceof DefaultValue ||
            $property instanceof Concatenator) {
            $labeledValue = $property->getLabeledValue($product);
            if ($labeledValue->def instanceof Select) {
                $value = $this->getSelectValue($labeledValue->def, $labeledValue->value);
            } elseif ($labeledValue->def instanceof Multiselect) {
                $values = $labeledValue->value;
                $translatedValues = [];
                if (is_array($values)) {
                    foreach ($values as $value) {
                        $translatedValues[] = $this->getSelectValue($labeledValue->def, $value);
                    }

                    $value = "<div class='optionvalue'>" . implode("</div><div class='optionvalue'>", $translatedValues) . '</div>';
                } else {
                    $value = '';
                }
            } elseif ($labeledValue->def instanceof Objects) {
                $names = [];
                if (is_array($labeledValue->value)) {
                    foreach ($labeledValue->value as $entry) {
                        if ($entry instanceof AbstractObject && method_exists($entry, 'getName')) {
                            $names[] = $entry->getName();
                        }
                    }
                }

                $value = implode(', ', $names);
            } elseif ($labeledValue->value instanceof AbstractObject && method_exists($labeledValue->value, 'getName')) {
                $value = $labeledValue->value->getName();
            } elseif ($labeledValue->def instanceof Checkbox) {
                $value = $this->translator->trans('optionvalue.' . ($labeledValue->value ? 'true' : 'false'));
            } elseif ($labeledValue->def instanceof Image) {
                $value = '<img src="' . $labeledValue->value . '" />';
            } else {
                $value = $labeledValue->value;
                if (is_object($value)) {
                    p_r($labeledValue);
                    p_r($property);
                    die();
                }
            }

            if (is_numeric($value)) {
                $value = $this->formatter->formatNumber($value);
            }

            if ($labeledValue->value) {
                $result = '
                            <tr>
                                <td class="firstcol">' . $this->translator->trans('attr.' . $labeledValue->label) . '</td>
                                <td class="secondcol">' . $value . '</td>
                            </tr>
                ';

                return $result;
            }
        } else {
            p_r($property);
        }
    }

    private function getSelectValue($def, $value)
    {
        return $this->translator->trans('optionvalue.' . $value);
    }
}
