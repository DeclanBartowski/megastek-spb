<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\Config\Option;
use Bitrix\Main\Localization\Loc;
$addressHeader = Option::get('tq.tools', 'tq_module_param_info_adress_header');
$email = Option::get('tq.tools', 'tq_module_param_info_email');
$phone = Option::get('tq.tools', 'tq_module_param_info_phone_formated');
$phoneVisible = Option::get('tq.tools', 'tq_module_param_info_phone_read');
?>

<div class="push-menu_footer">
    <ul class="contact-list">
        <li>
            <span class="ico-location"></span><?=$addressHeader?>
        </li>
        <li>
            <a href="mailto:<?=$email?>"><span class="ico-email"></span><?=$email?></a>
        </li>
    </ul>
    <div class="tablet-small_visible">
        <div class="head_phone-box">
            <a href="tel:<?=$phone?>" class="head_phone-number"><span class="ico-phone"></span><?=$phoneVisible?></a>
            <a href="<?=Loc::getMessage('LINK_MODAL')?>" data-toggle="modal" class="callback-btn"><?=Loc::getMessage('TEXT_MODAL')?></a>
        </div>
    </div>

    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "social",
        Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "COMPONENT_TEMPLATE" => "social",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "N",
            "DISPLAY_PICTURE" => "N",
            "DISPLAY_PREVIEW_TEXT" => "N",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => [],
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "13",
            "IBLOCK_TYPE" => "content",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "999",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(0=>"LINK",1=>"TYPE",),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "SORT",
            "SORT_BY2" => "ID",
            "SORT_ORDER1" => "ASC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N"
        )
    );?>
</div>