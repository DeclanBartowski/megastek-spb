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
<div class="section" id="six-section" data-id="6">
    <div class="production-section">
        <div class="tablet-small_visible">
            <div class="h3"><?= $arResult['IBLOCK']['NAME'] ?></div>
            <div class="section-title section-mod_title"><?= $arResult['NAME'] ?></div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-5 order-md-2">
                <div class="production_bg-item"
                     style="background-image: url(<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>)">
                    <? if (!empty($arResult['PROPERTIES']["YOUTUBE"]['VALUE'])): ?>
                        <a href="<?= $arResult['PROPERTIES']["YOUTUBE"]['VALUE'] ?>" target="_blank">
                            <div class="youtabe-btn">
                                <div class="circle-1"></div>
                                <div class="circle-2"></div>
                                <span class="ico-play play-icon"></span>
                            </div>
                        </a>
                    <? endif; ?>
                </div>
            </div>
            <div class="col-md-7 production_left-column">
                <div class="tablet-small_hidden">
                    <div class="h3"><?= $arResult['IBLOCK']['NAME'] ?></div>
                    <div class="section-title section-mod_title"><?= $arResult['NAME'] ?></div>
                </div>
                <?= $arResult['PREVIEW_TEXT'] ?>
                <? if (!empty($arResult['PROPERTIES']['ADV']["VALUE"])): ?>
                    <ul class="advantages-box">
                        <? foreach ($arResult['PROPERTIES']['ADV']["~VALUE"] as $prop): ?>
                            <li class="advantage-item is-fade">
                                <div class="advantage-item_content">
                                    <span class="advantage-item_number"><span
                                                class="advantage-item_digit"><?= $prop["NUMBER"] ?></span> <?= $prop["MEASURE"] ?></span>
                                    <span class="text"><?= $prop["TITLE"] ?></span>
                                </div>
                            </li>
                        <? endforeach; ?>
                    </ul>
                <? endif; ?>
                <? if (!empty($arResult["PROPERTIES"]['MODAL']['VALUE']["TITLE"]) && !empty($arResult["PROPERTIES"]['MODAL']['VALUE']["LINK"])): ?>
                    <a href="<?= $arResult["PROPERTIES"]['MODAL']['VALUE']["LINK"] ?>" data-toggle="modal"
                       class="main-btn"><?= $arResult["PROPERTIES"]['MODAL']['VALUE']["TITLE"] ?></a>
                <? endif; ?>
            </div>
        </div>
    </div>
</div>