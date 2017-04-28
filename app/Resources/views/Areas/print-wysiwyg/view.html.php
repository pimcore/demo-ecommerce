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
<div class="contentblock wysiwyg">
    <?php
    if ($this->editmode or (strlen($this->input("headline")) > 0)) {
        ?>
        <h2><?=$this->input("headline")?></h2>
        <div class="content">
        <?php
    }
    $params = array();
    $availables = array (
        "width",
        "height",
        "toolbar",
        "resize_disabled",
        "sharedtoolbar",
        "enterMode",
        "contentsCss"
    );
    foreach ($availables as $available) {
        if (isset($this->$available) and (strlen($this->$available) > 0)) {
            $params[$available] = $this->$available;
        }
    }
    echo $this->wysiwyg("content", $params);
    ?>
    </div>
</div>
