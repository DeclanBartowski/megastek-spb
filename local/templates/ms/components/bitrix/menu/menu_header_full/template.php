<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<? if (!empty($arResult)): ?>
    <nav id="fixed-nav" class="js-menu">
        <ul class="nav-menu">
            <?
            foreach ($arResult as $arItem):
                if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) {
                    continue;
                }
                ?>
                <li data-menuanchor="<?= $arItem['PARAMS']["menuanchor"] ?>">
                    <a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                </li>
            <? endforeach ?>
        </ul>
    </nav>
<? endif ?>