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
<div class="section" id="ten-section">
    <div class="wrapper_photo-slider">
        <div class="photo-slider">
            <? foreach ($arResult['ITEMS'] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
                <div class="photo-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>" style="background-image:url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>)">
                    <span class="photo-item_title"><?=$arItem['NAME']?></span>
                </div>
            <? endforeach; ?>
        </div>
        <div class="photo-section_footer">
            <div class="photo-counter">
                <span class="pagination-number">1</span>
                <span class="divider">/</span>
                <span class="pagination-digit"><?=count($arResult['ITEMS'])?></span>
            </div>
            <div class="photo-arrow"></div>
        </div>
    </div>
</div>

