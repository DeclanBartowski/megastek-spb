<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>



</div>
<!-- end fullpage -->
<div class="scroll-to-top"></div>
</div>
<div class="review-popup" id="review-1">
    <span class="review-item_name" id="name_review">Наталья Заславская</span>
    <span class="review-item_date" id="date_review">10 марта 2021  Москва</span>
    <div class="review-popup_content" id="contentReview">

    </div>
</div>


<div class="review-popup" id="terms">
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "modal_text",
        Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_ELEMENT_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "BROWSER_TITLE" => "-",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "COMPONENT_TEMPLATE" => "private_client",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "ELEMENT_CODE" => "",
            "ELEMENT_ID" => "78",
            "FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"PREVIEW_TEXT",),
            "IBLOCK_ID" => "17",
            "IBLOCK_TYPE" => "content",
            "IBLOCK_URL" => "",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "MESSAGE_404" => "",
            "META_DESCRIPTION" => "-",
            "META_KEYWORDS" => "-",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Страница",
            "PROPERTY_CODE" => [],
            "SET_BROWSER_TITLE" => "N",
            "SET_CANONICAL_URL" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "STRICT_SECTION_CHECK" => "N",
            "USE_PERMISSIONS" => "N",
            "USE_SHARE" => "N"
        )
    );?>
</div>


<div class="review-popup" id="politic">
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "modal_text",
        Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_ELEMENT_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "BROWSER_TITLE" => "-",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "COMPONENT_TEMPLATE" => "private_client",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "ELEMENT_CODE" => "",
            "ELEMENT_ID" => "77",
            "FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"PREVIEW_TEXT",),
            "IBLOCK_ID" => "17",
            "IBLOCK_TYPE" => "content",
            "IBLOCK_URL" => "",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "MESSAGE_404" => "",
            "META_DESCRIPTION" => "-",
            "META_KEYWORDS" => "-",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Страница",
            "PROPERTY_CODE" => [],
            "SET_BROWSER_TITLE" => "N",
            "SET_CANONICAL_URL" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "STRICT_SECTION_CHECK" => "N",
            "USE_PERMISSIONS" => "N",
            "USE_SHARE" => "N"
        )
    );?>
</div>


<div aria-hidden="true" class="modal fade js-modal" id="callback" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" type="button"><span class="ico-close"></span></button>
            <?$APPLICATION->IncludeComponent(
                "sp:main.feedback",
                "callback",
                Array(
                    "AJAX_MODE" => "Y",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "COMPONENT_TEMPLATE" => "",
                    "EMAIL_TO" => "admin@admin.admin",
                    "EVENT_MESSAGE_ID" => array(0=>"14",),
                    "FILE_SEND" => "N",
                    "INFOBLOCKADD" => "Y",
                    "INFOBLOCKID" => "15",
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                    "REQUIRED_FIELDS" => array(0=>"NONE",),
                    "USE_CAPTCHA" => "N"
                )
            );?>

        </div>
    </div>
</div>
<!-- end callback-->
<div aria-hidden="true" class="modal fade js-modal" id="callback-2" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" type="button"><span class="ico-close"></span></button>

            <?$APPLICATION->IncludeComponent(
                "sp:main.feedback",
                "eng",
                Array(
                    "AJAX_MODE" => "Y",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "COMPONENT_TEMPLATE" => "",
                    "EMAIL_TO" => "admin@admin.admin",
                    "EVENT_MESSAGE_ID" => array(0=>"13",),
                    "FILE_SEND" => "N",
                    "INFOBLOCKADD" => "Y",
                    "INFOBLOCKID" => "16",
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                    "REQUIRED_FIELDS" => array(0=>"NONE",),
                    "USE_CAPTCHA" => "N"
                )
            );?>


        </div>
    </div>
</div>
<!-- end callback-2-->
<div aria-hidden="true" class="modal fade js-modal"  role="dialog" id="application-accepted">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" type="button"><span class="ico-close"></span></button>
            <div class="popup-icon"><img data-src="<?=SITE_TEMPLATE_PATH?>/img/icons/ico-check.svg" alt=""></div>
            <p class="modal-text">Ваша заявка успешно отправлена!</p>
        </div>
    </div>
</div>


</body>
</html>
