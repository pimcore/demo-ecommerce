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

<nav class="text-center">
    <ul class="pagination">
        <?php if (isset($this->previous)) { ?>
            <li>
                <a href="<?= $this->pimcoreUrl(array('page' => $this->previous)); ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        <?php } ?>

        <?php foreach ($this->pagesInRange as $page) { ?>

            <?php if($current == $page) { ?>
                <li class="active"><a href="#"><?= $page ?> <span class="sr-only">(current)</span></a></li>
            <?php } else { ?>
                <li>
                    <a href="<?= $this->pimcoreUrl(array('page' => $page)); ?>">
                        <?= $page ?>
                    </a>
                </li>
            <?php } ?>

        <?php } ?>

        <?php if (isset($this->next)) { ?>
            <li>
                <a href="<?= $this->pimcoreUrl(array('page' => $this->next)); ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        <?php } ?>
    </ul>
</nav>
