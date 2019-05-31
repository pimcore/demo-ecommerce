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

use Pimcore\Model\Document;
use Pimcore\Model\Document\Page;

?>

<!DOCTYPE html>
<html lang="<?= $this->language; ?>">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="/pimcore/static/img/favicon/favicon-32x32.png" />

    <?php
        // portal detection => portal needs an adapted version of the layout
        $isPortal = $this->isPortal ?: false;

        /** @var Document|Page $document */
        $document = $this->document;

        // output the collected meta-data
        if(!$document) {
            // use "home" document as default if no document is present
            $document = Document::getById(1);
        }

        if($document->getTitle()) {
            // use the manually set title if available
            $this->headTitle()->set($document->getTitle());
        }

        if($document->getDescription()) {
            // use the manually set description if available
            $this->headMeta()->appendName('description', $document->getDescription());
        }

        $this->headTitle()->append("pimcore Demo");
        $this->headTitle()->setSeparator(" : ");

        echo $this->headTitle();
        echo $this->headMeta();
        echo $this->placeholder('canonical');
    ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <?php
        // we use the view helper here to have the cache buster functionality
        $this->headLink()->appendStylesheet('/static/bootstrap/css/bootstrap.css');
        $this->headLink()->appendStylesheet('/static/css/global.css');
        $this->headLink()->appendStylesheet('/static/lib/video-js/video-js.min.css', "screen");
        $this->headLink()->appendStylesheet('/static/lib/magnific/magnific.css', "screen");

        if($this->editmode) {
            $this->headLink()->appendStylesheet('/static/css/editmode.css', "screen");
        }
    ?>

    <?= $this->headLink(); ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/static/js/html5shiv.js"></script>
    <script src="/static/js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="<?= $isPortal ? "portal-page" : "" ?>">

<div class="navbar-wrapper">
    <?php
        $mainNavStartNode = $document->getProperty("mainNavStartNode");
        if(!$mainNavStartNode) {
            $mainNavStartNode = \Pimcore\Model\Document::getById(1);
        }
    ?>
    <div class="container">
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= $mainNavStartNode; ?>">
                        <img src="/static/img/logo-white.svg" alt="pimcore Demo">
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <?php
                        $mainNavigation = $this->navigation()->buildNavigation($document, $mainNavStartNode, null, function($page, $document) {
                            if($document->getProperty("templateType") == "shop" && $document->getProperty("globalRootCategory")) {
                                foreach($document->getProperty("globalRootCategory")->getChildren() as $category) {
                                    $page->addPage(new Pimcore\Navigation\Page\Document([
                                        "label" => $category->getName(),
                                        "id" => "category-" . $category->getId(),
                                        "uri" => $category->getDetailUrl(["document" => $document])
                                    ]));
                                }
                            }
                        });
                        echo $this->navigation()->menu()->renderMenu($mainNavigation, [
                            "maxDepth" => 1,
                            "ulClass" => "nav navbar-nav"
                        ]);
                    ?>

                    <ul class="nav navbar-nav navbar-right cart">
                        <?= $this->template('Includes/login.html.php', ["language" => $this->language]); ?>
                        <li><a href="<?= $this->url("cart", ["language" => $this->language, "action" => "list"]) ?>"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>  <?= $this->translate("general.mycart") ?></a></li>
                    </ul>


                    <form class="navbar-form navbar-right" role="search" action="<?= $this->pimcoreUrl(["prefix" => $this->language, "controller" => "shop", "action" => "search"], "action") ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" name="term" placeholder="Search" value="<?= $this->escape($this->getParam("term")) ?>">
                        </div>
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php if(!$isPortal) { ?>

    <?php

        if( $this->placeholder('addBreadcrumb') != '' )
        {
            $breadcrumbs = $this->placeholder('addBreadcrumb');
            $parentPage = false;

            foreach( $breadcrumbs as $breadcrumb )
            {
                $parentPage = $parentPage ?: $mainNavigation->findBy('id', $breadcrumb['parentId']);
                $newPage = new Pimcore\Navigation\Page\Document([
                    'id' => $breadcrumb['id'],
                    'uri' => $breadcrumb['url'] != '' ? $breadcrumb['url'] : '',
                    'label' => $breadcrumb['label'],
                    "active" => true
                ]);
                if($parentPage)
                {
                    $parentPage->setActive(false);
                    $parentPage->addPage($newPage);
                    $parentPage = $newPage;
                } else {
                    $mainNavigation->addPage($newPage);
                }
            }
        }


    ?>


    <header class="jumbotron subhead">
        <div class="container">
            <h2><?= $this->input("headTitle"); ?></h2>
            <p class="lead"><?= $this->input("headDescription"); ?></p>
        </div>
    </header>
    <?php
        $color = $document->getProperty("headerColor");
        if($color) { // orange is the default color

            $colorMapping = [
                "blue" => ["#258dc1","#2aabeb"],
                "green" => ["#278415","#1a9f00"]
            ];
            $c = $colorMapping[$color];
        ?>
        <style>
            .jumbotron {
                background: <?= $c[1]; ?>; /* Old browsers */
                background: -moz-linear-gradient(45deg, <?= $c[0]; ?> 0%, <?= $c[1]; ?> 100%); /* FF3.6+ */
                background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, <?= $c[0]; ?>), color-stop(100%, <?= $c[1]; ?>)); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(45deg, <?= $c[0]; ?> 0%, <?= $c[1]; ?> 100%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(45deg, <?= $c[0]; ?> 0%, <?= $c[1]; ?> 100%); /* Opera 11.10+ */
                background: -ms-linear-gradient(45deg, <?= $c[0]; ?> 0%, <?= $c[1]; ?> 100%); /* IE10+ */
                background: linear-gradient(45deg, <?= $c[0]; ?> 0%, <?= $c[1]; ?> 100%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='<?= $c[0]; ?>', endColorstr='<?= $c[1]; ?>', GradientType=1); /* IE6-9 fallback on horizontal gradient */
            }
        </style>
    <?php } ?>

    <div id="content" class="container">
        <?php if(!$this->hideBreadcrumb) { ?>
            <div class="breadcrumb">
                <a href="/"><?= $this->translate("Home"); ?></a> &gt;
                <?= $this->navigation()->breadcrumbs()->setMinDepth(null)->render($mainNavigation); ?>
            </div>
        <?php } ?>

        <div class="col-md-<?php if(!$document->getProperty("leftNavHide") && !$this->hideNav) { ?>9 col-md-push-3<?php } else { ?>12<?php } ?>">

            <?php if($this->app->getSession() && $this->app->getSession()->getFlashBag()) { ?>

                <?php foreach($this->app->getSession()->getFlashBag()->all() as $type => $flashMessage) { ?>
                    <div class="alert alert-<?= $type ?> alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?= implode("<br/>", $flashMessage) ?>
                    </div>
                <?php } ?>
            <?php } ?>


            <?php $this->slots()->output('_content') ?>
        </div>

        <?php if(!$document->getProperty("leftNavHide") && !$this->hideNav) { ?>
            <div class="col-md-3 col-md-pull-9 sidebar">
                <div class="bs-sidebar hidden-print affix-top" role="complementary">
                    <?php
                        $startNode = $document->getProperty("leftNavStartNode");
                        if(!$startNode) {
                            $startNode = $mainNavStartNode;
                        }
                    ?>
                    <h3><?= $startNode->getProperty("navigation_name"); ?></h3>
                    <?php
                        $lefNavigation = $this->navigation()->buildNavigation($document, $startNode);
                        echo $this->navigation()->menu()->renderMenu($lefNavigation, [
                            "ulClass" => "nav bs-sidenav",
                            "expandSiblingNodesOfActiveBranch" => true
                        ]);
                    ?>
                </div>
                <?= $this->inc($document->getProperty("sidebar")); ?>
            </div>
        <?php } ?>
    </div>
<?php } else { ?>
    <?php $this->slots()->output('_content') ?>
<?php } ?>



<?php
    // include a document-snippet - in this case the footer document
    echo $this->inc("/" . $this->language . "/shared/includes/footer");

    // global scripts, we use the view helper here to have the cache buster functionality
    $this->headScript()->prependFile('/static/js/jquery-1.11.0.min.js');
    $this->headScript()->appendFile('/static/bootstrap/js/bootstrap.js');
    $this->headScript()->appendFile('/static/lib/magnific/magnific.js');
    $this->headScript()->appendFile('/static/lib/video-js/video.js');
    $this->headScript()->appendFile('/static/js/srcset-polyfill.min.js');
    echo $this->headScript();
?>

<script>
    videojs.options.flash.swf = "/static/lib/video-js/video-js.swf";
</script>

<script>

    // main menu
    $(".navbar-wrapper ul.nav>li>ul").each(function () {
        var li = $(this).parent();
        var a = $("a.main", li);

        $(this).addClass("dropdown-menu");
        li.addClass("dropdown");
        a.addClass("dropdown-toggle");
        li.on("mouseenter", function () {
            $("ul", $(this)).show();
        });
        li.on("mouseleave", function () {
            $("ul", $(this)).hide();
        });
    });

    // side menu
    $(".bs-sidenav ul").each(function () {
        $(this).addClass("nav");
    });

    // gallery carousel: do not auto-start
    $('.gallery').carousel('pause');

    // tabbed slider text
    var clickEvent = false;
    $('.tabbed-slider').on('click', '.nav a', function() {
        clickEvent = true;
        $('.nav li').removeClass('active');
        $(this).parent().addClass('active');
    }).on('slid.bs.carousel', function(e) {
        if(!clickEvent) {
            var count = $('.nav').children().length -1;
            var current = $('.nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if(count == id) {
                $('.nav li').first().addClass('active');
            }
        }
        clickEvent = false;
    });

    $("#portalHeader img, #portalHeader .item, #portalHeader").height($(window).height());

    <?php if(!$this->editmode) { ?>

        // center the caption on the portal page
        $("#portalHeader .carousel-caption").css("bottom", Math.round(($(window).height() - $("#portalHeader .carousel-caption").height())/3) + "px");

        $(document).ready(function() {

            // lightbox (magnific)
            $('a.thumbnail').magnificPopup({
                type:'image',
                gallery: {
                    enabled: true
                }
            });

            $(".image-hotspot").tooltip();
            $(".image-marker").tooltip();
        });

    <?php } ?>
</script>

</body>
</html>
