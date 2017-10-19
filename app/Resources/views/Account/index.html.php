<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

$this->extend('layout.html.php');

/** @var \CustomerManagementFrameworkBundle\Model\CustomerInterface|\Pimcore\Model\DataObject\Customer $customer */
$customer = $app->getUser();

/** @var \CustomerManagementFrameworkBundle\Templating\Helper\SsoIdentity $ssoIdentityHelper */
$ssoIdentityHelper = $this->cmfSsoIdentity();
$ssoIdentities     = $ssoIdentityHelper->getSsoIdentities($customer);

// we don' want to show social login buttons for services we're already connected to
$connectedSsoIdentities = [];
foreach ($ssoIdentities as $ssoIdentity) {
    $connectedSsoIdentities[] = $ssoIdentity->getProvider();
}

?>

<?php $this->headTitle('Account') ?>

    <div class="page-header">
        <h1><?= $this->translate("account.welcome", [$customer->getFirstname(), $customer->getLastname()]) ?></h1>
    </div>


    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?= $this->translate("account.data") ?>
            </div>
            <div class="panel-body">
                <address>
                    <?php
                        $locale = $app->getContainer()->get('pimcore.locale');
                        $regionArray = $locale->getDisplayRegions();
                    ?>
                    <strong><?= $customer->getFirstname() ?> <?= $customer->getLastname() ?> </strong><br>
                    <?= $customer->getStreet() ?><br>
                    <?= $customer->getZip() ?> <?= $customer->getCity() ?> <br>
                    <?= strtoupper($regionArray[$customer->getCountryCode()]) ?><br/>
                    <a href="mailto:<?= $customer->getEmail() ?>"><?= $customer->getEmail() ?></a>
                </address>
            </div>
        </div>
    </div>

    <?php if(count($connectedSsoIdentities) < 2) { ?>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?= $this->translate("account.connect-sso-profiles") ?>
                </div>
                <div class="panel-body">
                    <?= $this->template('Account/partials/social-login-buttons.html.php', [
                        'blacklist' => $connectedSsoIdentities,
                        'route'     => 'app_auth_oauth_connect',
                        'connect'   => true
                    ]) ?>
                </div>
            </div>
        </div>
    <?php } ?>
