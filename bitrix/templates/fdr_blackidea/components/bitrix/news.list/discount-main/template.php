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
print_r($arResult["ITEMS"]);
?>
<div class="container">
			<div class="sale__bg">
				<!-- Mobile -->
                <?foreach($arResult["ITEMS"] as $arItem):?>
                <?print_r($arItem);?>                
    				<a class="sale__mobileblock" href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
    					<p class="small">с <?=$arItem["DISPLAY_ACTIVE_FROM"]?> по <?=$arItem["DATE_ACTIVE_TO"]?></p>
    					<p><?=$arItem["PREVIEW_TEXT"]?></p>
    				</a>
                    
    				<!-- Desktop -->
                  
    				<div class="sale__desktopblock">
    					<p class="heading"><?echo $arItem["NAME"]?></p>
    					<p><?=$arItem["PREVIEW_TEXT"]?></p>
    					<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="button button_green"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
    				</div>
    
    				<div class="sale__bg-gradients"><span></span><span></span></div>
    				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>">
                <?endforeach?>
			</div>
			<p class="sale__link"><a href="/discounts">Все акции <img src="bitrix/templates/fdr_blackidea/img/icon_arrow_right_2.svg" alt="Все акции" width="31" class="bounce"></a></p>
</div>










