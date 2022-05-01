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
<div class="section" id="first-section">
    <div class="main-slider">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="main-slide" style="background-image:url(<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>)">
                <div class="container" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <div class="main-slide_content">
                        <h1><?= $arItem['NAME'] ?></h1>
                        <? if (!empty($arItem['PROPERTIES']['ADV']['VALUE'])): ?>
                            <ul class="advantages-list">
                                <? foreach ($arItem['PROPERTIES']['ADV']['VALUE'] as $value): ?>
                                    <li>
                                        <? if (!empty($value["PICTURE_ADV"])): ?>
                                            <span class="item-icon">
                            <img data-src="<?= CFile::GetPath($value["PICTURE_ADV"]) ?>" alt="<?= $value["TITLE_ADV"] ?>">
                        </span>
                                        <? endif; ?>
                                        <span class="item-text"><?= $value["TITLE_ADV"] ?></span>
                                    </li>
                                <? endforeach; ?>
                            </ul>
                        <? endif; ?>
                        <? if (!empty($arItem['PROPERTIES']["MAIN_SCREEN_BTN"]['VALUE']['TITLE_MODAL']) && !empty($arItem['PROPERTIES']["MAIN_SCREEN_BTN"]['VALUE']['LINK_MODAL'])): ?>
                            <a href="<?= $arItem['PROPERTIES']["MAIN_SCREEN_BTN"]['VALUE']['LINK_MODAL'] ?>"
                               data-toggle="modal"
                               class="main-mod_btn"><?= $arItem['PROPERTIES']["MAIN_SCREEN_BTN"]['VALUE']['TITLE_MODAL'] ?></a>
                        <? endif; ?>
                    </div>
                </div>
            </div>
        <? endforeach; ?>

    </div>
</div>