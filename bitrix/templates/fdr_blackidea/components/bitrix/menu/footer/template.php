<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

    <ul class="footer__list">
        <?foreach($arResult as $arItem):?>
            <li><p><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></p></li>
        <?endforeach?>
    </ul>
<?endif;?>