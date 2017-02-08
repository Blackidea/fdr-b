<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
require_once($_SERVER["DOCUMENT_ROOT"].$arParams["SECTION_URL"]."ajax.js"); 
?>
<style>
body {
    font-size: 14px;}
    
.loading-gif{
    display: none;
}
.loading-gif img{
    width: 10%;
    position: fixed;
    margin-left: -5%;
    left: 50%;
    top: 50%;
    margin-top: -5%;
}
</style>


<div class="container">
    <div class="top">
        <p class="toptext">Показать:</p>
            <select name="" id="">
                <option value="">Все новости</option>
            </select>
    </div>
    <div class="js-pager-wrepper" style="display: none;">
        <?if($arParams["DISPLAY_TOP_PAGER"]):?>
        	<?=$arResult["NAV_STRING"]?><br />
        <?endif;?>
        </div>
    <div class="newsblocks newsblocks_pagenews">
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <?//print_r($arItem);?>
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="news-linkblock">
				<div class="bg"></div>
				<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['name']?>">
				<p class="small"><?=$arItem['ACTIVE_FROM']?></p>
				<p><?=$arItem['NAME']?></p>
			</a>
            <?endforeach;?>
    </div>
    <div class="loading-gif">
        <img src="<?=$APPLICATION->GetTemplatePath("img")?>/loading.gif"/>
    </div>
    <?if($GLOBALS['pagesCount']>1):?>
    <a data-counter="<?=$GLOBALS['pagesCount']?>" href="#" class="js-more-news button button_green"><span class="button__border-top"></span>Показать еще<span class="button__border-bottom"></span></a>
    <?endif?>
</div>

