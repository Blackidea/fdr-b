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
//print_r($arResult["ITEMS"]);
?>
<div class="container">
			<h2>Новости</h2>
			<div class="newsblocks">
				 <?foreach($arResult["ITEMS"] as $arItem):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="news-linkblock">
					<div class="bg"></div>
					<img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>">
					<p class="small"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></p>
					<p><?echo $arItem["NAME"]?></p>
				</a>
                <?endforeach?>
			</div>
			<p class="news__link"><a href="/news">Все новости <img src="bitrix/templates/fdr_blackidea/img/icon_arrow_right_2.svg" alt="@@" width="31" class="bounce"></a></p>
</div>
