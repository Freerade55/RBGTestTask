<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Page\Asset;
?>


<!doctype html>
<html lang="en">
<head>


    <title><?php $APPLICATION->ShowTitle();?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/style.css">



    <?php $APPLICATION->ShowHead();?>



</head>
<body>


<div id="panel">
    <?php $APPLICATION->ShowPanel();?>
</div>




<header role="banner">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-9 social">
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-instagram"></span></a>
                    <a href="#"><span class="fa fa-youtube-play"></span></a>
                    <a href="#"><span class="fa fa-vimeo"></span></a>
                    <a href="#"><span class="fa fa-snapchat"></span></a>
                </div>
                <div class="col-3 search-top">
                    <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                    <form action="#" class="search-top-form">
                        <span class="icon fa fa-search"></span>
                        <input type="text" id="s" placeholder="Type keyword to search...">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container logo-wrap">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                <h1 class="site-logo"><a href="index.html"><?=$APPLICATION->ShowTitle(false) ?></a></h1>
            </div>
        </div>
    </div>


    <?
    $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "top_menu",
        [
            "ALLOW_MULTI_SELECT"    => "N",
            "CHILD_MENU_TYPE"       => "subtop",
            "DELAY"                 => "N",
            "MAX_LEVEL"             => "2",
            "MENU_CACHE_GET_VARS"   => [
            ],
            "MENU_CACHE_TIME"       => "3600",
            "MENU_CACHE_TYPE"       => "N",
            "MENU_CACHE_USE_GROUPS" => "N",
            "ROOT_MENU_TYPE"        => "top",
            "USE_EXT"               => "N",
            "COMPONENT_TEMPLATE"    => "top_menu",
        ],
        false
    ); ?>

</header>
<!-- END header -->

