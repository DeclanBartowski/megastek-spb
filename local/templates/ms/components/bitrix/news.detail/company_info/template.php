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
$list = array_chunk($arResult['PROPERTIES']['LIST']['VALUE'], 5);
?>
<div class="section service-section" id="fifth-section" >
    <div class="container">
        <div class="h3"><?=$arResult['PROPERTIES']['TITLE']['VALUE']['TITLE_SECTION']?></div>
        <div class="section-subtitle"><?=$arResult['PROPERTIES']['TITLE']['VALUE']['SUBTITLE_FIRST']?> <span class="thin-text"><?=$arResult['PROPERTIES']['TITLE']['VALUE']['SUBTITLE_SECOND']?></span></div>
        <div class="row">
            <div class="col-md-5 order-md-2">
                <?if(!empty($arResult['PREVIEW_PICTURE']['SRC'])):?>
                    <div class="service-img service-mod_img">
                        <img data-src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" alt="alt">
                    </div>
                <?endif;?>

                <?if(!empty($arResult['PROPERTIES']['MODAL']['VALUE']['BTN_MODAL']) && !empty($arResult['PROPERTIES']['MODAL']['VALUE']['BTN_LINK'])):?>
                    <a href="<?=$arResult['PROPERTIES']['MODAL']['VALUE']['BTN_LINK']?>" data-toggle="modal" class="main-btn tablet-small_hidden"><?=$arResult['PROPERTIES']['MODAL']['VALUE']['BTN_MODAL']?></a>
                <?endif;?>
            </div>
            <div class="col-md-7 service_desc-column">
                <div class="section-title"><?= $arResult['PROPERTIES']['LIST_TITLE']['VALUE'] ?></div>
                <div class="row">
                    <? foreach ($list as $chunk): ?>
                        <div class="col-lg-6">
                            <ul>
                                <? foreach ($chunk as $prop): ?>
                                    <li><?= $prop ?></li>
                                <? endforeach; ?>
                            </ul>
                        </div>
                    <? endforeach; ?>
                </div>
                <?if(!empty($arResult['PROPERTIES']['MODAL']['VALUE']['BTN_MODAL']) && !empty($arResult['PROPERTIES']['MODAL']['VALUE']['BTN_LINK'])):?>
                    <a href="<?=$arResult['PROPERTIES']['MODAL']['VALUE']['BTN_LINK']?>" data-toggle="modal" class="main-btn tablet-small_visible"><?=$arResult['PROPERTIES']['MODAL']['VALUE']['BTN_MODAL']?></a>
                <?endif;?>
            </div>
        </div>
    </div>
</div>

