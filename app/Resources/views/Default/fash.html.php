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


?>



<?= $this->translate("general.filters.category") ?>

<?php if($this->filterDefinitionObject->getFilters()): ?>
    <div class="widget">
        <?php foreach ($this->filterDefinitionObject->getFilters() as $filter): ?>
        <?= $this->filterService->getFilterFrontend($filter, $this->products, $this->currentFilter);?>
        <?php endforeach; ?><!-- end widget -->
    </div>
<?php endif; ?>

<h3>done</h3>