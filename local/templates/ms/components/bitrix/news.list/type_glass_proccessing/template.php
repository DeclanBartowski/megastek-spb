<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\Localization\Loc;
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

<div class="section" id="seven-section">
    <div class="production-section">
        <div class="tablet-small_visible">
            <div class="h3"><?=Loc::getMessage('DESCRIPTION')?></div>
            <div class="section-title section-mod_title"><?= $arResult['NAME'] ?></div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-5 order-md-2">
                <div class="production_bg-item"
                     style="background-image: url(<?= CFile::GetPath($arResult['PICTURE']) ?>)"></div>
            </div>
            <div class="col-md-7 production_left-column">
                <div class="tablet-small_hidden">
                    <div class="h3"><?=Loc::getMessage('DESCRIPTION')?></div>
                    <div class="section-title section-mod_title"><?= $arResult['NAME'] ?></div>
                </div>
                <p class="top-text"><?= $arResult['DESCRIPTION'] ?></p>
                <div class="row">
                    <? foreach ($arResult["SECTIONS"] as $section): ?>
                        <div class="col-lg-6">
                            <? foreach ($arResult['SECTIONS_ITEMS'][$section['ID']] as $arItem): ?>
                                <?
                                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                                    array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                ?>
                                <div class="types-processing_box" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                                    <span class="title"><?= $arItem['NAME'] ?></span>
                                    <? if (!empty($arItem['PROPERTIES']['LIST']['VALUE'])): ?>
                                        <ul>
                                            <? foreach ($arItem['PROPERTIES']['LIST']['VALUE'] as $prop): ?>
                                                <li><?= $prop ?></li>
                                            <? endforeach; ?>
                                        </ul>
                                    <? endif; ?>
                                </div>
                            <? endforeach; ?>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

