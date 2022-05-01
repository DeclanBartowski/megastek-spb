<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\Config\Option;
use Bitrix\Main\Localization\Loc;
$email = Option::get('tq.tools', 'tq_module_param_info_email');
$phone = Option::get('tq.tools', 'tq_module_param_info_phone_formated');
$phoneVisible = Option::get('tq.tools', 'tq_module_param_info_phone_read');
?>

<div class="bg-overlay"></div>

<div class="wrapper-loader">
    <div class="load-bg" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/bg/load/01.png)"></div>
    <div class="load-bg" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/bg/load/02.png)"></div>
    <div class="load-bg" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/bg/load/03.png)"></div>
    <div class="load-bg" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/bg/load/04.png)"></div>
    <div class="load-bg" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/bg/load/05.png)"></div>
    <div class="load-bg" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/bg/load/06.png)"></div>
    <div class="load-bg" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/bg/load/07.png)"></div>
    <div class="loader-header">
        <div class="loader-logo"><img src="<?=SITE_TEMPLATE_PATH?>/img/static/logo.svg" alt="alt"></div>
        <span class="logo-head_text">loading...</span>
    </div>
    <div class="logo-content">
        <span class="logo-content_text"><span class="logo_large-text">Производство и монтаж</span></span>
    </div>
</div>


<header class="ui-header">
    <div class="container">
        <div class="head_left-column">
            <div class="head-logo">
                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/logo.svg" class="head_first-img" alt="alt">
                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/logo-2.svg" class="head_second-img" alt="alt">
            </div>
            <a href="tel:<?=$phone?>" class="mobile_phone-icon"></a>
            <div class="hamburger hamburger--spring">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
        </div>
        <div class="head_center-column">
            <span class="head-first-title"></span>
            <span class="ico-arrow"></span>
            <span class="head-second-title"></span>
        </div>
        <div class="head_right-column tablet-small_hidden">
            <a href="mailto:<?=$email?>" class="head-email"><span class="ico-mail"></span><?=$email?></a>
            <div class="head_phone-box">
                <a href="tel:<?=$phone?>" class="head_phone-number"><?=$phoneVisible?></a>
                <a href="<?=Loc::getMessage('LINK_MODAL')?>" data-toggle="modal" class="callback-btn"><?=Loc::getMessage('TEXT_MODAL')?></a>
            </div>
        </div>
    </div>
</header>