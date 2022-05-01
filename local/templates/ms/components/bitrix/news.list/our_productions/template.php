<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="section product-section" id="second-section" data-id="2">
    <div class="container tab-container">
        <div class="product-section_header">
            <div class="row">
                <div class="col-md-6">
                    <div class="h3"><?= $arResult['NAME'] ?></div>
                    <ul class="product_tab-names">
                        <? foreach ($arResult['SECTIONS'] as $key => $sections): ?>
                            <li class="tab <? if ($key == 0): ?>active<? endif; ?>"><?= $sections['NAME'] ?></li>
                        <? endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <? foreach ($arResult['SECTIONS'] as $key => $sections): ?>
            <div class="tab-item <? if ($key == 0): ?>is-visible<? endif; ?>">
                <div class="wrapper_product-slider">
                    <div class="product-slider">
                        <? foreach ($arResult['SECTIONS_ITEMS'][$sections['ID']] as $arItem): ?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                            <div class="product-slide">
                                <div class="row" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                                    <div class="col-md-6 left-column">
                                        <div class="product-slide_desc">
                                            <div class="section-title"><?= $arItem['NAME'] ?> <span
                                                        class="min"><?= $arItem['PREVIEW_TEXT'] ?></span></div>
                                            <? if (!empty($arItem['PROPERTIES']["ADV"]['VALUE'])): ?>
                                                <ul>
                                                    <? foreach ($arItem['PROPERTIES']["ADV"]['VALUE'] as $adv): ?>
                                                        <li><?= $adv ?></li>
                                                    <? endforeach; ?>
                                                </ul>
                                            <? endif; ?>
                                            <span class="product-item_price"><?=\Bitrix\Main\Localization\Loc::getMessage('PRICE_MSG_BTN')?> <?= $arItem['PROPERTIES']["PRICE"]['VALUE'] ?></span>
                                            <? if (!empty($arItem['PROPERTIES']["MODAL"]['VALUE']['TITLE_BTN']) && !empty($arItem['PROPERTIES']["MODAL"]['VALUE']['LINK_BTN'])): ?>
                                                <a href="<?= $arItem['PROPERTIES']["MODAL"]['VALUE']['LINK_BTN'] ?>"
                                                   data-toggle="modal"
                                                   class="main-btn"><?= $arItem['PROPERTIES']["MODAL"]['VALUE']['TITLE_BTN'] ?></a>
                                            <? endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 product-img">
                                        <img data-src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                                             alt="<?= $arItem['NAME'] ?>">
                                    </div>
                                </div>
                            </div>
                        <? endforeach; ?>
                    </div>
                    <div class="product-count">
                        <span class="pagination-number"></span>
                        <span class="divider">/</span>
                        <span class="pagination-digit"></span>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>
