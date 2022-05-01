<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\Config\Option;
use Bitrix\Main\Localization\Loc;
$addressHeader = Option::get('tq.tools', 'tq_module_param_info_adress');
$email = Option::get('tq.tools', 'tq_module_param_info_email');

?>



<div class="section contact-section" id="twelve-section" data-id="12">
    <div class="contact-section_top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title section-mod_title"><?=Loc::getMessage('TITLE')?></div>
                    <ul class="contact-list">
                        <li>
                            <span class="ico-location"></span><?=$addressHeader?>
                        </li>
                        <li>
                            <a href="mailto:<?=$email?>"><span class="ico-email"></span><?=$email?></a>
                        </li>
                    </ul>

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "social_footer",
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
                <div class="col-md-6">

                    <?$APPLICATION->IncludeComponent(
                        "sp:main.feedback",
                        "footer",
                        Array(
                            "AJAX_MODE" => "Y",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "N",
                            "COMPONENT_TEMPLATE" => "",
                            "EMAIL_TO" => "admin@admin.admin",
                            "EVENT_MESSAGE_ID" => array(0=>"12",),
                            "FILE_SEND" => "N",
                            "INFOBLOCKADD" => "Y",
                            "INFOBLOCKID" => "14",
                            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                            "REQUIRED_FIELDS" => array(0=>"NONE",),
                            "USE_CAPTCHA" => "N"
                        )
                    );?>

                </div>
            </div>
        </div>
    </div>
    <div class="main-footer">
        <div class="container">
            <div class="copyright"><?=Loc::getMessage('COPYRIGHT')?></div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "menu_footer",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(0=>"",),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "menu_footer",
                    "USE_EXT" => "N"
                )
            );?>

            <a href="//webmedia39.ru/" class="footer-studio"><img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/studio.svg" alt="alt"></a>
        </div>
    </div>
</div>
