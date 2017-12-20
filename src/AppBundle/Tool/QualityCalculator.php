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

namespace AppBundle\Tool;

use Pimcore\Model\DataObject\Concrete;
use Pimcore\Model\DataObject\Data\CalculatedValue;
use Pimcore\Model\DataObject\Product;
use Pimcore\Tool;

class QualityCalculator {


    /**
     * @param $object Concrete
     * @param $context CalculatedValue
     * @return string
     */
    public static function compute(Concrete $object, CalculatedValue $context) {

          return self::getCalculatedValueForEditMode($object, $context);

    }

    /**
     * @param $object
     * @param $context CalculatedValue
     * @return string
     */
    public static function getCalculatedValueForEditMode(Concrete $object, CalculatedValue $context) {

        if($object instanceof Product) {
            if($context->getFieldname() == "textsAvailable") {

                if($object->getName($context->getPosition()) && $object->getDescription($context->getPosition())) {
                    return "completed";
                }

            }

            if($context->getFieldname() == "attributesAvailable") {

                if($object->getSpecificAttributes() && $object->getSpecificAttributes()->getItems()) {
                    return "completed";
                }

            }

            if($context->getFieldname() == "variantsAvailable") {

                if($object->getType() == "variant" || $object->getChildren()) {
                    return "completed";
                }

            }


            return "not completed";

        } else {
            return null;
        }

    }

    /**
     * @param $data
     * @param $object
     * @param $params
     * @return string
     */
    public static function renderLayoutText($data, Concrete $object, $params) {

        if($object instanceof Product) {
            $quality = [];

            $hasMissing = false;
            $hasCompleted = false;
            foreach(Tool::getValidLanguages() as $language) {
                if($object->getTextsAvailable($language) == "not completed") {
                    $hasMissing = true;
                } else if($object->getTextsAvailable($language) == "completed") {
                    $hasCompleted = true;
                }
            }

            $quality['Texts Available'] = !$hasCompleted ? "not completed" : (!$hasMissing ? "completed" : "partly completed");
            $quality['Attributes Available'] = $object->getAttributesAvailable();
            $quality['Variants Available'] = $object->getVariantsAvailable();

            $htmlTable = "<table class='qa-summary-table'>";

            $htmlTable .= "<thead><tr><td>Elements</td><td>Completed</td></tr></thead>";

            foreach($quality as $key => $value) {

                $cssClass = "";
                switch ($value) {
                    case "completed":
                        $cssClass = "qa-completed";
                        break;
                    case "not completed":
                        $cssClass = "qa-not-completed";
                        break;
                    case "partly completed":
                        $cssClass = "qa-partly-completed";
                        break;

                }

                $htmlTable .= "<tr class='$cssClass'>";
                $htmlTable .= "<td>$key</td>";
                $htmlTable .= "<td>$value</td>";
                $htmlTable .= "</tr>";
            }

            $htmlTable .= "</table>";

            return "<h2>Data Quality Summary</h2>" . $htmlTable;
        } else {
            return "";
        }


    }
}