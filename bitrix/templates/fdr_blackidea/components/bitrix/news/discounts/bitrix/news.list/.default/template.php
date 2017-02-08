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
?>

<section class="pagesales">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

	<div class="small-page-heading">
		<div class="container">
			<h2>Акции</h2>
		</div>
	</div>
	<div class="container">
		<div class="top">
			<p class="toptext">Показать:</p>
			<select name="" id="">
				<option value="">Все акции</option>
			</select>
		</div>
	</div>
	<div class="salesblocks">
		<div class="container">
	<?foreach($arResult["ITEMS"] as $arItem):?>	
    <?print_r($arItem)?>
    <?=FormatDate("Q", MakeTimeStamp($arItem['TIMESTAMP_X']))?>
			<div class="sales__bg">
				<div class="sales__block">
					<p class="small">с <?=$arItem["DISPLAY_ACTIVE_FROM"]?> по <?=$arItem["ACTIVE_TO"]?></p>
					<p><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["PREVIEW_TEXT"]?></a></p>
				</div>
				<div class="sale__bg-gradients"><span></span><span></span></div>
			</div>
   <?endforeach?>
		</div>
	</div>

	<div class="container">
		<a href="#" class="button button_green"><span class="button__border-top"></span>Показать еще<span class="button__border-bottom"></span></a>
	</div>
</section>













