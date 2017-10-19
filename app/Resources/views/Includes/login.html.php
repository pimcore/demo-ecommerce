<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

/** @var \Symfony\Component\Security\Core\User\User $user */
$user = $this->app->getUser();
?>

<?php if($user) { ?>


    <li class="dropdown">
        <a href="#" class="dropdown-toggle" id="loginSelector" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
            <span class="glyphicon glyphicon-user"></span> <?= $this->translate("general.account") ?>

            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu navbar-login" aria-labelledby="loginSelector">
            <li>
                <a href="#"><strong><?= $this->translate("general.logged-in-as") ?>: <br/><?= $user->getUsername() ?></strong></a>
                <a href="<?= $this->url("action", ["prefix" => $this->language, "controller" => "account", "action" => "index"]) ?>"><?= $this->translate("general.my-account") ?></a>
                <a href="<?= $this->url('app_logout') ?>"><?= $this->translate("general.logout") ?></a>
            </li>
        </ul>
    </li>

<?php } else { ?>

    <li>
        <a href="<?= $this->url("action", ["prefix" => $this->language, "controller" => "account", "action" => "index"]) ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  <?= $this->translate("general.account") ?></a>
    </li>
<?php } ?>


