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

use Pimcore\Bundle\EcommerceFrameworkBundle\PriceSystem\Price;
use Pimcore\Bundle\EcommerceFrameworkBundle\Type\Decimal;

/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

    $this->extend('email.html.php');

    /**
     * @var $order \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractOrder
     */
    $order = $this->order;

    $locale = Pimcore::getContainer()->get('pimcore.locale');
    $regionArray = $locale->getDisplayRegions();
?>

<table width="700" class="content-table no-border" border="0" cellpadding="5" cellspacing="0">
    <tr>
        <td>
            <?=$this->wysiwyg('introduction')?>
        </td>
    </tr>

</table>
<?php if(!$this->editmode) {?>

    <?php
        $currency = new \Pimcore\Bundle\EcommerceFrameworkBundle\Model\Currency($order->getCurrency());
    ?>

<table width="700" class="content-table" border="0" cellpadding="2" cellspacing="0">
    <tr>
        <td align="left" valign="middle" bgcolor="#ffffff"  class="orange" colspan="2" style="color:#596068;font-weight: bold; text-transform: uppercase;"><?=$this->translate('email.contact-data')?></td>
    </tr>
    <tr>
        <td align="left" valign="top" style="vertical-align: middle;" bgcolor="#f3f3f3" width="200" class="left" ><?=$this->translate('user.firstname')?></td>
        <td bgcolor="#f3f3f3" class="left"><?=$order->getCustomerFirstname()?></td>
    </tr>
    <tr>
        <td align="center" valign="middle" bgcolor="#FFFFFF" class="left"><?=$this->translate('user.lastname')?></td>
        <td bgcolor="#FFFFFF" class="left"><?=$order->getCustomerLastname()?></td>
    </tr>
    <tr>
        <td align="center" valign="middle" bgcolor="#f3f3f3" class="left"><?=$this->translate('user.email')?></td>
        <td bgcolor="#f3f3f3" class="left"><a href="mailto:<?=$order->getCustomerEMail()?>"><?=$order->getCustomerEMail()?></a></td>
    </tr>
</table>


<table width="700" class="content-table" border="0" cellpadding="2" cellspacing="0">

    <tr>
        <th align="left" style="padding-left: 10px;" width="180"><?=$this->translate('cart.productname')?><br/><small><?=$this->translate('checkout.cart.productno')?></small></th>
        <th width="100"><?=$this->translate('cart.unitprice')?></th>
        <th width="60"><?=$this->translate('cart.quantity')?></th>
        <th width="100"><?=$this->translate('cart.totalprice')?></th>
    </tr>


    <?php foreach($order->getItems() as $item) { $product = $item->getProduct(); ?>
    <tr>
        <td align="left" style="color: #1FA6E0; font-size: 12px;"><a href="#"><?=$item->getProductName()?></a><br/><span style="color:#252525;"><?= $this->translate("articleno") ?>: <?= $item->getProductnumber() ?></span></td>
        <td align="center"><strong><?= $product->getOSPrice()?></strong></td>
        <td align="center"><strong><?=$item->getAmount()?></strong></td>
        <td align="center"><strong><?=new Price(Decimal::create($item->getTotalPrice()), $currency) ?></strong></td>
    </tr>
    <?php } ?>

    <tr>
        <td style="border-top: 1px solid #1FA6E0;" align="right" colspan="3"><strong><?=$this->translate('cart.subtotal')?></strong></td>
        <td style="border-top: 1px solid #1FA6E0;font-size: 12px;" align="center" ><strong><?= new Price(Decimal::create($order->getSubTotalPrice()), $currency); ?></strong></td>
    </tr>


    <?php foreach ($order->getPriceModifications() as $modification) { ?>
        <tr>
            <td style="" align="right" colspan="3"><?=$this->translate('shop.cart.modification' . $modification->getName())?></td>
            <td style="font-size: 12px;" align="center" ><?= new Price(Decimal::create($modification->getAmount()), $currency);?></td>
        </tr>
    <?php } ?>

    <tr>
        <td style="border-top: 1px solid #1FA6E0;" align="right" colspan="3"><strong><?=$this->translate('cart.grandtotal')?></strong></td>
        <td style="border-top: 1px solid #1FA6E0;font-size: 18px; color: #596068;" align="center" ><strong><?=new Price(Decimal::create($order->getTotalPrice()), $currency); ?></strong></td>
    </tr>

    <?php if($order->getTaxInfo()) { ?>

        <tr>
            <td style="border-top: 1px solid #1FA6E0;" align="right" colspan="3"><?= $this->translate("cart.taxes") ?></td>
            <td style="border-top: 1px solid #1FA6E0;font-size: 12px;" align="center" >
                <?php foreach($order->getTaxInfo() as $taxEntry) { ?>
                    <?= $taxEntry[0] ?>: <?= $taxEntry[1] ?> (<?=  $currency->toCurrency($taxEntry[2]) ?>)<br/>
                <?php } ?>
            </td>
        </tr>


    <?php } ?>


</table>

<!-- VERSANDINFOS -->

<table width="700" class="content-table" border="0" cellpadding="2" cellspacing="0">
    <tr>
        <td align="left" valign="middle" bgcolor="#ffffff"  class="orange" colspan="2" style="color:#596068;font-weight: bold; text-transform: uppercase;"><?=$this->translate('checkout.order-information')?></td>

    </tr>
    <tr>
        <td align="left" valign="top" style="padding-top:5px; vertical-align: top;" bgcolor="#f3f3f3" width="200" class="left"><strong><?=$this->translate("checkout.delivery-address")?></strong></td>
        <td bgcolor="#f3f3f3" class="left">
            <?=$order->getDeliveryFirstname() ?> <?=$order->getDeliveryLastname() ?><br/>
            <?=$order->getDeliveryCompany()?><br/>
            <?=$order->getDeliveryStreet()?><br/>
            <?=$order->getDeliveryZip()?> <?=$order->getDeliveryCity()?><br/>
            <?=$regionArray[$order->getDeliveryCountry()]?><br/>
        </td>
    </tr>
    <tr>
        <td align="center" valign="middle" bgcolor="#f3f3f3" class="left"><strong><?=$this->translate('checkout.your-ordernumber')?></strong></td>
        <td bgcolor="#f3f3f3" class="left"><?=$order->getOrdernumber()?></td>
    </tr>
</table>
<?php } else { ?>
<table width="700" class="content-table" border="0" cellpadding="5" cellspacing="0"><tr><td style="padding: 10px; background-color:#ccc;">Hier stehen die E-Mail-Daten</td></tr></table>
<?php } ?>

