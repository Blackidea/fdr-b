<header class="header">
    <div class="overlay"></div>
	<div class="header__menubutton"><span></span></div>
	<a href="index.php" class="header__logo"><img src="bitrix/templates/fdr_blackidea/img/logo_foderent.svg" alt="@@" width="106"></a>
	<div class="header__icons">
		<a href="#" class="header__icon "><img src="bitrix/templates/fdr_blackidea/img/icon_cart.svg" alt="@@"></a>
		<!-- Desktop -->
		<a href="#" class="header__icon authorized message" style="display:none;"><img src="bitrix/templates/fdr_blackidea/img/icon_message.png" alt="@@"><span>3</span></a>
		<!-- Desktop -->
		<a href="#" class="header__icon authorized" style="display:none;"><img src="bitrix/templates/fdr_blackidea/img/icon_person.png" alt="@@"></a>
		<a href="#" class="header__icon" data-action="toggleheadersearch"><img src="bitrix/templates/fdr_blackidea/img/icon_loupe.svg" alt="@@"></a>
		<!-- Desktop 1200 -->
		<a href="#" class="button button_small button_green login"><span class="button__border-top"></span>Вход / Регистрация<span class="button__border-bottom"></span></a>
	</div>
	
	<!-- Desktop -->
	<form class="searchform header__searchform">
		<div class="searchform__field">
			<div class="selectbox selectbox_green">
			    <select name="type">
			        <option value="type1">Тип техники 1</option>
			        <option value="type2">Тип техники 2</option>
			    </select>
			    <ul class="selectbox__selectlist"></ul>
			</div>
		</div>
		<div class="searchform__field searchform__field_date">
			<p class="huge datefrom">24.10</p>
			<img src="bitrix/templates/fdr_blackidea/img/icon_arrow_right.png" alt="@@">
			<p class="huge dateto">02.11</p>
			<a href="#" class="calendar" data-dateopen="top_datepicker"><img src="bitrix/templates/fdr_blackidea/img/icon_calendar.svg" alt="@@"></a>
			<div class="datepicker" id="top_datepicker"></div>
			<input type="text" value="" class="inputdatefrom" name="srokarendifrom">
            <input type="text" value="" class="inputdateto" name="srokarendito">
		</div>
		
		<div class="searchform__field">
			<input type="text" name="workplace" placeholder="Место работ">
		</div>
		<!-- Desktop -->
		<button class="desktop"><img src="bitrix/templates/fdr_blackidea/img/icon_loupe.svg" alt="@@"></button>
		<!-- Activesearch Button -->
		<a href="#" class="button button_white"><span class="button__border-top"></span>Фильтр<span class="button__border-bottom"></span></a>
	</form>
</header>