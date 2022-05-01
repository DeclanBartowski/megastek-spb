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
<div class="section" id="third-section" data-id="3">
    <div class="work-section tab-container">
        <div class="h3"><?= $arResult['NAME'] ?></div>
        <ul class="work_tab-names">
            <? foreach ($arResult['SECTIONS'] as $key => $sections): ?>
                <li class="tab <? if ($key == 0): ?>active<? endif; ?>"><?= $sections['NAME'] ?></li>
            <? endforeach; ?>
        </ul>
        <? foreach ($arResult['SECTIONS'] as $key => $sections): ?>
            <div class="tab-item <? if ($key == 0): ?>is-visible<? endif; ?>">
                <div class="work-slider">
                    <? foreach ($arResult['SECTIONS_ITEMS'][$sections['ID']] as $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="work-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <a href="<?= $arItem['DETAIL_PICTURE']['SRC'] ?>" class="fancybox" data-fancybox="work"
                               data-caption="<?= $arItem['NAME'] ?>">
                                <span class="work-item_img">
                                    <img data-src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['NAME'] ?>">
                                </span>
                                <span class="work-item_name"><?= $arItem['NAME'] ?></span>
                            </a>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>
