<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

CModule::IncludeModule('iblock');

$res = CIBlockSection::GetTreeList([
    'IBLOCK_ID' => $arParams['IBLOCK_ID']
]);

while ($section = $res->Fetch()) {
    $arResult['SECTIONS'][$section['CODE']] = $section;
}

foreach ($arResult['ITEMS'] as $arItem) {
    $arResult['SECTIONS_ITEMS'][$arItem['IBLOCK_SECTION_ID']][] = $arItem;
}
