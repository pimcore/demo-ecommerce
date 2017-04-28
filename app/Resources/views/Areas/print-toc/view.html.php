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

$this->headScript()->appendFile("/bundles/web2printtools/vendor/js/awesomizr.js");


?>

<div id="toc-wrapper">
    <h1><?= $this->input("heading") ?></h1>

    <p><?= $this->wysiwyg("introtext") ?></p>

    <?php if($this->editmode) { ?>
        TABLE OF CONTENTS IS GENERATED ON PDF-EXPORT
    <?php } ?>
</div>


<?php if(!$this->editmode) { ?>
    <div class="toc-footer-text-placeholder-left"><?= $this->input("heading"); ?></div>
    <div class="toc-footer-text-placeholder-right"><?= $this->input("heading"); ?></div>
<?php } ?>



<?php if(!$this->editmode) { ?>
<script type="text/javascript">

    $(document).ready(function() {
        Awesomizr.createTableOfContents({
            /* toc container */
            insertiontarget: '#toc-wrapper',
            insertiontype: 'beforeend',
            /* levels to look for and link to in toc*/
            elements: ['h1','h2'],
            /* container element for the toc */
            container: {tag: 'ul', addClass: 'toc'},
            /* container element for one line in the toc */
            line: {tag: 'li'},
            disabledocumenttitle: true,
            toctitle: ' ',

            /* method of getting the text for the toc lines */
            text: function (elem) {
                return elem.textContent;
            }
        });

    });

</script>
<?php } ?>
