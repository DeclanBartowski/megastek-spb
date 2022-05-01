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
<div class="section" id="nine-section">
    <div class="certificates-section">
        <div class="h3"><?=$arResult['DESCRIPTION']?></div>
        <div class="section-title section-mod_title"><?=$arResult['NAME']?></div>
        <?if(!empty( $arResult['SECTIONS']['sertificate'])):?>
            <div class="certificates-slider">
                <? foreach ($arResult['SECTIONS_ITEMS'][$arResult['SECTIONS']['sertificate']['ID']] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                    array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                    <div class="certificate-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                        <a href="<?=$arItem['DETAIL_PICTURE']['SRC']?>" class="fancybox" data-fancybox="gallery" data-caption="<?=$arItem['NAME']?>">
                            <span class="certificate-item_img"><img data-src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>"></span>
                            <span class="item-text"><?=$arItem['NAME']?></span>
                        </a>
                    </div>
                <? endforeach; ?>
            </div>
            <div class="mobile-visible">
                <div class="certificates-counter">
                    <span class="pagination-number"></span>
                    <span class="divider">/</span>
                    <span class="pagination-digit"></span>
                </div>
            </div>
        <?endif;?>

        <?if(!empty( $arResult['SECTIONS']['partners'])):?>
            <div class="partners-slider">
                <? foreach ($arResult['SECTIONS_ITEMS'][$arResult['SECTIONS']['partners']['ID']] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                    array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                    <span id="<?= $this->GetEditAreaId($arItem['ID']); ?>" class="partner-item">
                        <img data-src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>">
                    </span>
                <? endforeach; ?>
            </div>
        <?endif;?>
    </div>
</div>

