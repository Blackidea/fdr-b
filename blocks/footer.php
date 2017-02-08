<footer class="footer">
	<div class="container">
		<div class="footer__top-part">
			<!-- Desktop -->
			<a href="#" class="footer__logo"><img src="bitrix/templates/fdr_blackidea/img/logo_foderent_footer.svg" alt="@@" width="217"></a>
			
			<div class="footer__buttonblock">
			    <div class="footer__button-container">
			        <a href="#" class="button"><span class="button__border-top"></span>Начать пользоваться<span class="button__border-bottom"></span></a>
			    </div>
			    <div class="footer__button-container">
			        <a href="#" class="button"><span class="button__border-top"></span>Стать партнером<span class="button__border-bottom"></span></a>
			    </div>
			</div>
		</div>
		<div class="footer__middle-part">
			<!-- Desktop -->
			<div class="footer__listsblock">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "footer", Array(
                	"ROOT_MENU_TYPE" => "footer_1",	// Тип меню для первого уровня
                		"MAX_LEVEL" => "3",	// Уровень вложенности меню
                		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
                		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                	),
                	false
                );?> 
			    
                <?$APPLICATION->IncludeComponent("bitrix:menu", "footer", Array(
                	"ROOT_MENU_TYPE" => "footer_2",	// Тип меню для первого уровня
                		"MAX_LEVEL" => "3",	// Уровень вложенности меню
                		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
                		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                	),
                	false
                );?> 
			    
			    <?$APPLICATION->IncludeComponent("bitrix:menu", "footer", Array(
                	"ROOT_MENU_TYPE" => "footer_3",	// Тип меню для первого уровня
                		"MAX_LEVEL" => "3",	// Уровень вложенности меню
                		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
                		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                	),
                	false
                );?> 
			</div>
			
			<form action="send.php" method="post" class="footer__form">
				<p class="big">Подписка на новости и акции</p>
				<input type="text" placeholder="Email">
				<button type="submit"><img src="bitrix/templates/fdr_blackidea/img/icon_arrow_right_3.svg" alt="@@" width="47"></button>
			</form>
		</div>
	</div>
	<div class="footer__bottom-part">
		<div class="container">
			<p>© Foderent, 2016</p>
			<p>Разработка и продвижение сайта — <a href="http://blackidea.net/" target="_blank"><img src="bitrix/templates/fdr_blackidea/img/logo_blackidea.svg" alt="@@"></a></p>
		</div>
	</div>
	<a class="toup_button"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="19px" height="10px" viewBox="0 0 26.087 14.458" enable-background="new 0 0 26.087 14.458" xml:space="preserve"><g><line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="13.042" y1="1.414" x2="1.413" y2="13.043"/><line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="13.042" y1="1.414" x2="24.672" y2="13.043"/></g></svg></a>
</footer>