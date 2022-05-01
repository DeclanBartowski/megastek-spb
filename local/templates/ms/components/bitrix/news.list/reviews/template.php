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
<div class="reviews-section_header">
    <div class="h3"><?= $arResult['NAME'] ?></div>
    <div class="section-title section-mod_title"><?= $arResult['DESCRIPTION'] ?></div>
</div>
<div class="reviews-slider">
    <? foreach ($arResult['ITEMS'] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

        if (empty($arItem['DETAIL_PICTURE']['SRC'])) {

            $arItem['DETAIL_PICTURE']['SRC'] = $arItem['PREVIEW_PICTURE']['SRC'];
        }

        ?>
        <div class="review-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <?if(!empty($arItem['PREVIEW_PICTURE']['SRC'])):?>
                <div class="review-item_img">
                    <a href="<?= $arItem['DETAIL_PICTURE']['SRC'] ?>" class="fancybox" data-fancybox="review"
                       data-caption="<?= $arItem['PROPERTIES']["COMPANY"]['VALUE'] ?>">
                        <img data-src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="alt">
                    </a>
                </div>
            <?endif;?>
            <div class="review-item_desc">
                <span class="review-item_name"><?= $arItem['NAME'] ?></span>
                <span class="review-item_date"><?= $arItem['PROPERTIES']["DATE"]['VALUE'] ?></span>
                <p><?= $arItem['PREVIEW_TEXT'] ?></p>
                <a href="#review-1"
                   data-name="<?= $arItem['NAME'] ?>"
                   data-date="<?= $arItem['PROPERTIES']["DATE"]['VALUE'] ?>"
                   data-text="<?= $arItem['DETAIL_TEXT'] ?>"
                   class="fancybox read-completely_btn"><?= GetMessage('READ_MORE') ?></a>
            </div>
        </div>
    <? endforeach; ?>
</div>
<div class="mobile-visible">
    <div class="review-counter">
        <span class="pagination-number"></span>
        <span class="divider">/</span>
        <span class="pagination-digit"></span>
    </div>
</div>