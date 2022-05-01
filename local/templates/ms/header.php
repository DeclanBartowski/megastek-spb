<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html class="no-js" lang="ru">
<head>
    <? $APPLICATION->ShowHead(); ?>

    <?
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
    Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="ie=edge">');
    Asset::getInstance()->addString('<link href="'.SITE_TEMPLATE_PATH.'/img/favicon.ico" rel="icon" type="image/png" />');
    Asset::getInstance()->addString('<link href="'.SITE_TEMPLATE_PATH.'/img/favicon.png" rel="icon" type="image/png" />');
    Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="120x120" href="'.SITE_TEMPLATE_PATH.'/img/apple-touch-icon.png" />');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/custom.js");
    ?>
	<title><? $APPLICATION->ShowTitle(); ?></title>
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>

<!--[if lt IE 10]>
<p class="browsehappy"><br>Вы используете <strong>устаревший</strong> браузер.
    Пожалуйста, <a href="http://browsehappy.com/">обновите его</a> для корректного
    отображения сайтов.</p>
<![endif]-->
<div class="global-wrapper">
    <?$APPLICATION->IncludeComponent(
        "sp:main.block",
        "header_top",
        Array(
            "COMPONENT_TEMPLATE" => "header_top",
        )
    );?>

    <!-- END UI-HEADER -->
    <div class="push-menu">
        <div class="push-menu_header">
            <div class="push-logo"><img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/logo-2.svg" alt="alt"></div>
            <span class="ico-close push-menu_close-btn"></span>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "menu_header",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(0=>"",),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N"
            )
        );?>

        <?$APPLICATION->IncludeComponent(
            "sp:main.block",
            "header",
            Array(
                "COMPONENT_TEMPLATE" => "header",
            )
        );?>
    </div>

    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "menu_header_full",
        Array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(""),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "menu_header",
            "USE_EXT" => "N"
        )
    );?>

    <div class="pendulum js-pendulum">
        <span class="pendulum-arrow"></span>
    </div>
    <div id="fullpage">
