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

$params = [
    'MIN_THICKNESS_GLASS' => SITE_TEMPLATE_PATH . '/img/icons/features/02.svg',
    'MAX_THICKNESS_GLASS' => SITE_TEMPLATE_PATH . '/img/icons/features/03.svg',
    'MIN_RADIUS_GLASS' => SITE_TEMPLATE_PATH . '/img/icons/features/07.svg',
    'GLASS_THICKNESS' => SITE_TEMPLATE_PATH . '/img/icons/features/02.svg',
    'MIN_SIZE' => SITE_TEMPLATE_PATH . '/img/icons/features/04.svg',
    'MAX_SIZE' => SITE_TEMPLATE_PATH . '/img/icons/features/05.svg',
];
?>

<div class="section features-section" id="eight-section" data-id="8">
    <div class="container">
        <div class="h3"><?= $arResult['DESCRIPTION'] ?></div>
        <div class="section-title section-mod_title"><?= $arResult['NAME'] ?></div>
        <div class="row features-row">
            <? foreach ($arResult['ITEMS'] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                    array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="col-lg-3 col-md-6 col-sm-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <div class="specification-item">
                        <? if (!empty($arItem['PROPERTIES']["SVG"]['VALUE'])): ?>
                            <span class="specification-item_icon">
                        <img data-src="<?= CFile::GetPath($arItem['PROPERTIES']["SVG"]['VALUE']) ?>"
                             alt="<?= $arItem['NAME'] ?>">
                    </span>
                        <? endif; ?>

                        <span class="specification-item_title"><?= $arItem['NAME'] ?></span>
                        <? if (!empty($arItem['PROPERTIES']["COSTUMER_SIZE"]['VALUE'])): ?>
                            <div class="specification-item_img">
                                <img data-src="<?= SITE_TEMPLATE_PATH ?>/img/static/size.jpg" alt="alt">
                            </div>
                        <? endif; ?>
                        <ul class="specification-item_list">
                            <? foreach ($params as $prop => $img): ?>
                                <? if (!empty($arItem['PROPERTIES'][$prop]['VALUE'])): ?>
                                    <li>
                                        <span class="item-icom"><img data-src="<?= $img ?>"
                                                                     alt="<?= $arItem['PROPERTIES'][$prop]['NAME'] ?>"></span>
                                        <span class="item-text"><?= $arItem['PROPERTIES'][$prop]['NAME'] ?>
                                            <? if (is_array($arItem['PROPERTIES'][$prop]['VALUE'])): ?>
                                                <span class="item-digit"><?= implode('<br>',
                                                        $arItem['PROPERTIES'][$prop]['VALUE']) ?></span>
                                            <? else: ?>
                                                <span class="item-digit"><?= $arItem['PROPERTIES'][$prop]['VALUE'] ?></span>
                                            <? endif; ?>
                                </span>
                                    </li>
                                <? endif; ?>
                            <? endforeach; ?>
                        </ul>

                        <? if (!empty($arItem['PROPERTIES']["MODALBTN"]['VALUE']['TITLE_BTN']) && !empty($arItem['PROPERTIES']["MODALBTN"]['VALUE']['LINK_BTN'])): ?>
                            <a href="<?= $arItem['PROPERTIES']["MODALBTN"]['VALUE']['LINK_BTN'] ?>" data-toggle="modal"
                               class="main-btn specification-item_btn"><?= $arItem['PROPERTIES']["MODALBTN"]['VALUE']['TITLE_BTN'] ?></a>
                        <? endif; ?>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</div>
