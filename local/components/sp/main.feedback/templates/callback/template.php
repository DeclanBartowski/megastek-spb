<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?>



    <?
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="callback-form">
    <?=bitrix_sessid_post()?>
    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
    <input type="hidden" name="submit" value="<?=GetMessage("SUBMIT")?>">
    <div class="section-title"><?=GetMessage('TITLE_FORM_CALLBACK')?></div>
    <span class="top-subtitle"><?=GetMessage('SUB_TITLE_CALLBACK')?></span>
    <div class="form-fields">
        <div class="form-group">
            <input name="NAME" type="text" class="form-control requiredField callback-name">
            <label class="form-label"><?=GetMessage('NAME')?></label>
        </div>
        <div class="form-group">
            <label class="form-label"><?=GetMessage('PHONE')?></label>
            <input type="tel" name="PHONE" class="form-control requiredField callback-phone">
        </div>
    </div>


    <?if($arParams["USE_CAPTCHA"] == "Y"):?>
        <div class="mf-captcha">
            <div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
            <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
            <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
            <div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
            <input type="text" name="captcha_word" size="30" maxlength="50" value="">
        </div>
    <?endif;?>

    <input type="submit" name="submit" class="callback-form_submit main-btn js_form-submit" value="<?=GetMessage('SUBMIT')?>">
    <div class="callback_form-policy">
        <?=GetMessage('PRIVACY_CALLBACK',['URL'=>'#politic'])?>

    </div>
</form>

