<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Foderent аренда строительной техники");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Foderent аренда строительной техники");
?>
<div class="page">
	<div class="overlay"></div>

	<!-------------------------------------------------->
	<div class="page-content-container" id="page-content">
	<section class="firstscreen">
		<div class="firstscreen__bg">
			<img src="bitrix/templates/fdr_blackidea/img/index/firstscreen_bg.jpg" alt="@@" class="firstscreen__bg-image">
			<div class="firstscreen__bglines"></div>
		</div>
		<div class="container small">
			<h1>Новые технологии <br>
			<span>аренды спецтехники</span></h1>
			<form class="searchform">
				<div class="searchform__field">
					<div class="selectbox selectbox_green selectbox_inputbox">
              <!--<input type="text" name="typeget" placeholder="Выберите тип">-->
					    <select name="type">
					        <option value="type1">Тип техники 1</option>
					        <option value="type2">Тип техники 2</option>
					    </select>
					    <ul class="selectbox__selectlist"></ul>
					</div>
				</div>
				<div class="searchform__field searchform__field_date">
					<p class="huge datefrom">24.10</p>
					<img src="bitrix/templates/fdr_blackidea/img/icon_arrow_right.svg" alt="@@" width="46" height="25">
					<p class="huge dateto">02.11</p>
					<a href="#" class="calendar" data-dateopen="first_datepicker"><img src="bitrix/templates/fdr_blackidea/img/icon_calendar.svg" alt="@@"></a>
					<div class="datepicker" id="first_datepicker"></div>
					<input type="text" value="" class="inputdatefrom" name="srokarendifrom">
                    <input type="text" value="" class="inputdateto" name="srokarendito">
				</div>

				<div class="searchform__field">
					<input type="text" name="workplace" placeholder="Место работ">
				</div>
				<!-- Desktop -->
				<button class="desktop"><img src="bitrix/templates/fdr_blackidea/img/index/search.svg" alt="@@"></button>
				<!-- Mobile -->
				<button class="firstscreen__button">Найти</button>
			</form>
		</div>
		<!-- Desktop -->
		<a href="#" class="firstscreen__mouseicon"><img src="bitrix/templates/fdr_blackidea/img/icon_mouse.svg" alt="@@" width="24"></a>
	</section>

	<!-------------------------------------------------->

	<!-- Desktop -->
	<section class="technics animation-off">

        <!-- Шаг 1. Выбор типа техники -->
	    <div class="technics__choose-type technics__choose-type_first">
	        <img src="bitrix/templates/fdr_blackidea/img/nut.svg" alt="@@" class="technics__rotating-gear">
	        <p class="technics__choose-type-heading">
                Выберите тип техники
	            <span class="technics__bigarrow"></span>
	        </p>
	    </div>

	    <!-- Шаг 2. Просмотр подкатегорий -->
	    <div class="technics__choose-type technics__choose-type_subtype technics__choose-type_nextwo">
            <img src="bitrix/templates/fdr_blackidea/img/nut.svg" alt="@@" class="technics__rotating-gear">
	        <p class="technics__stepback" data-gotostep="1">Назад</p>
	        <p class="technics__choose-type-heading">
                Дорожная техника
	            <span class="technics__bigarrow"></span>
	        </p>
	        <ul class="technics__subtype-list">
	            <li data-image="bitrix/templates/fdr_blackidea/img/index/subtype1@2x.jpg">Мини-погрузчик</li>
                <li data-image="bitrix/templates/fdr_blackidea/img/index/subtype2@2x.jpg">Экскаватор-погрузчик</li>
                <li data-image="bitrix/templates/fdr_blackidea/img/index/subtype3@2x.jpg">Экскаватор гусеничные</li>
                <li data-image="bitrix/templates/fdr_blackidea/img/index/subtype4@2x.jpg">Экскаватор колесный</li>
                <li data-image="bitrix/templates/fdr_blackidea/img/index/subtype5@2x.jpg">Бульдозер</li>
                <li data-image="bitrix/templates/fdr_blackidea/img/index/subtype6@2x.jpg">Автогрейдер</li>
                <li data-image="bitrix/templates/fdr_blackidea/img/index/subtype7@2x.jpg">Фронтальный погрузчик</li>
                <li data-image="bitrix/templates/fdr_blackidea/img/index/subtype8@2x.jpg">Каток грунтовый</li>
                <li data-image="bitrix/templates/fdr_blackidea/img/index/subtype9@2x.jpg">Каток дорожный</li>
                <li data-image="bitrix/templates/fdr_blackidea/img/index/subtype10@2x.jpg">Асфальтоукладчики</li>
                <li data-image="bitrix/templates/fdr_blackidea/img/index/subtype11@2x.jpg">Гудронаторы</li>
                <li data-image="bitrix/templates/fdr_blackidea/img/index/subtype12@2x.jpg">Дорожные фрезы</li>
                <li data-image="bitrix/templates/fdr_blackidea/img/index/subtype13@2x.jpg">Поливомоечная машина</li>
                <li data-image="bitrix/templates/fdr_blackidea/img/index/subtype14@2x.jpg">Трактор</li>
	        </ul>
	    </div>

	    <!-- Шаг 2,5. Выбор типа техники -->
	    <div class="technics__choose-type technics__choose-type_subtype technics__choose-type_nexthree">
	        <p class="technics__stepback" data-gotostep="1">Назад</p>
	        <p class="technics__choose-type-heading">
                Выберите тип техники
	            <span class="technics__bigarrow"></span>
	        </p>
	    </div>

	    <!-- ############### -->
	    <!-- ############### -->
        <!-- ############### -->

	    <!-- Шаг 1-3. Категории товаров -->
	    <div class="technics__categories">
            <div class="technics__category">
                <div class="technics__category-image"><img src="bitrix/templates/fdr_blackidea/img/technics_1.jpg" alt=""></div>
                <p class="technics__category-name"><span>Землеройная</span></p>
                <div class="technics__category-secondimage"><img src="bitrix/templates/fdr_blackidea/img/technics_7.jpg" alt=""></div>
            </div>

            <!-- ####### -->

            <div class="technics__category">
                <div class="technics__category-image"><img src="bitrix/templates/fdr_blackidea/img/technics_2.jpg" alt=""></div>
                <p class="technics__category-name"><span>Погрузочная</span></p>
                <div class="technics__category-secondimage"><img src="bitrix/templates/fdr_blackidea/img/technics_7.jpg" alt=""></div>
            </div>

            <!-- ####### -->

            <div class="technics__category">
                <div class="technics__category-image"><img src="bitrix/templates/fdr_blackidea/img/technics_3.jpg" alt=""></div>
                <p class="technics__category-name"><span>Дорожная</span></p>
                <div class="technics__category-secondimage"><img src="bitrix/templates/fdr_blackidea/img/technics_7.jpg" alt=""></div>
            </div>

            <!-- ####### -->

            <div class="technics__category">
                <div class="technics__category-image"><img src="bitrix/templates/fdr_blackidea/img/technics_4.jpg" alt=""></div>
                <p class="technics__category-name"><span>Карьерная</span></p>
                <div class="technics__category-secondimage"><img src="bitrix/templates/fdr_blackidea/img/technics_7.jpg" alt=""></div>
            </div>

            <!-- ####### -->

            <div class="technics__category">
                <div class="technics__category-image"><img src="bitrix/templates/fdr_blackidea/img/technics_5.jpg" alt=""></div>
                <p class="technics__category-name"><span>Мини техника</span></p>
                <div class="technics__category-secondimage"><img src="bitrix/templates/fdr_blackidea/img/technics_7.jpg" alt=""></div>
            </div>

            <!-- ####### -->

            <div class="technics__category">
                <div class="technics__category-image"><img src="bitrix/templates/fdr_blackidea/img/technics_6.jpg" alt=""></div>
                <p class="technics__category-name"><span>Коммунальная</span></p>
                <div class="technics__category-secondimage"><img src="bitrix/templates/fdr_blackidea/img/technics_7.jpg" alt=""></div>
            </div>

            <!-- ####### -->

            <div class="technics__category">
                <div class="technics__category-image"><img src="bitrix/templates/fdr_blackidea/img/technics_7.jpg" alt=""></div>
                <p class="technics__category-name"><span>Подъемная</span></p>
                <div class="technics__category-secondimage"><img src="bitrix/templates/fdr_blackidea/img/technics_7.jpg" alt=""></div>
            </div>
	    </div>

	    <!-- ############### -->
	    <!-- ############### -->
	    <!-- ############### -->

	    <!-- Расширенный фильтр -->
        <div class="technics__fullfilter">
	        <p>Расширенный фильтры<span class="technics__fullfilter-arrow"><img src="bitrix/templates/fdr_blackidea/img/calculator/filter-open-arrow.svg" width="34" alt="@@"></span></p>
	    </div>

	    <!-- Шаг 2. Сопроводительная техника -->

	    <div class="technics__additionals">
	        <p class="technics__additionals-heading">Сопроводительная техника:</p>
	        <!-- Сопроводительная техника -->
            <div class="technics__additionals-list">
                <a href="#" class="technics__additional">
                    <div class="technics__additional-texts">
                        <p class="technics__additional-name">Бульдозер гусеничный <span>KOMATSU D85ESS-2A</span></p>
                        <p class="technics__additional-price technics__additional-price-from technics__additional-price-smena">10 000</p>
                    </div>
                    <div class="technics__additional-img"><img src="bitrix/templates/fdr_blackidea/img/technics_1.jpg" alt="@@"></div>
                </a>

                <a href="#" class="technics__additional">
                    <div class="technics__additional-texts">
                        <p class="technics__additional-name">Бульдозер гусеничный <span>KOMATSU D85ESS-2A</span></p>
                        <p class="technics__additional-price technics__additional-price-from technics__additional-price-smena">10 000</p>
                    </div>
                    <div class="technics__additional-img"><img src="bitrix/templates/fdr_blackidea/img/technics_1.jpg" alt="@@"></div>
                </a>

                <a href="#" class="technics__additional">
                    <div class="technics__additional-texts">
                        <p class="technics__additional-name">Бульдозер гусеничный <span>KOMATSU D85ESS-2A</span></p>
                        <p class="technics__additional-price technics__additional-price-from technics__additional-price-smena">10 000</p>
                    </div>
                    <div class="technics__additional-img"><img src="bitrix/templates/fdr_blackidea/img/technics_1.jpg" alt="@@"></div>
                </a>
            </div>
	    </div>

	    <!-- ############### -->
	    <!-- ############### -->
	    <!-- ############### -->

	    <!-- Фильтр: сводка по выбранным параметрам -->
	    <div class="technics__step-three-summary">
	        <p class="technics__stepback" data-gotostep="2">Назад</p>
	        <p class="technics__summary-heading"><span>Мини-погрузчик</span></p>
	        <ul class="technics__summary-list">
	            <li>Bobcat</li>
	            <li>Колесный</li>
	            <li>S330</li>
	            <li>2007 г.</li>
                <li>150-600 л. с.</li>
                <li>Прямой, полусферический</li>
                <li>С 24.10 по 2.11</li>
	        </ul>
	        <a href="#submit-form" class="button button_green technics__summary-button"><span class="button__border-top"></span>Подобрать<span class="button__border-bottom"></span></a>
	    </div>

        <!-- Все фильтры -->
        <form class="technics__allfilters">
            <div class="technics__allfilters_filterlist">
                <ul>
                    <li>Мини- погрузчик</li>
                    <li>Каток грунтовый</li>
                    <li>Мини-экскаватор</li>
                    <li>Каток дорожный</li>
                    <li>Экскаватор-погрузчик</li>
                    <li>Асфальтоукладчики</li>
                    <li>Экскаватор гусеничные</li>
                    <li>Гудронаторы</li>
                    <li>Экскаватор колесный</li>
                    <li>Дорожные фрезы</li>
                    <li>Бульдозер</li>
                    <li>Поливомоечная машина</li>
                    <li>Автогрейдер</li>
                    <li>Трактор</li>
                    <li>Фронтальный погрузчик</li>
                    <li>Автокран</li>
                    <li>Телескопический погрузчик</li>
                    <li>Самосвал</li>
                </ul>
            </div>

            <div class="technics__allfilters-scrollarea">

                <div class="technics__allfilters-row">
                    <div class="technics__allfilters-col">
                        <label for="brand" class="technics__label">Бренд</label>
                        <div class="selectbox">
                            <select name="brand" id="brand" data-leftinfo="true">
                                <option value="Bobcat1" selected>Bobcat1</option>
                                <option value="Bobcat2">Bobcat2</option>
                                <option value="Bobcat3">Bobcat3</option>
                            </select>
                            <ul class="selectbox__selectlist">
                            </ul>
                        </div>

                        <label for="type1" class="technics__label">Тип</label>
                        <div class="checkradio">
                            <input type="radio" name="type" id="type1" checked data-leftinfo="true" value="Колесный">
                            <label for="type1"><span></span>Колесный</label>
                        </div>
                        <div class="checkradio">
                            <input type="radio" name="type" id="type2" value="Колесный">
                            <label for="type2"><span></span>Колесный</label>
                        </div>

                        <label for="model" class="technics__label">Модель</label>
                        <div class="selectbox">
                            <select name="model" id="model" data-leftinfo="true">
                                <option value="S330" selected>S330</option>
                                <option value="S530">S530</option>
                            </select>
                            <ul class="selectbox__selectlist"></ul>
                        </div>

                        <label for="mass" class="technics__label">Эксплуатационная масса (кг)</label>
                        <div class="parameter-slider">
                            <div class="slider" data-from="0" data-to="600" data-leftinfo="true" data-left-name="кг"></div>
                            <input type="text" class="number_from" name="massfrom">
                            <input type="text" class="number_to" name="massto">
                        </div>

                        <label for="kovsh" class="technics__label">Тип ковша</label>
                        <div class="selectbox">
                            <select name="kovsh" id="kovsh" data-leftinfo="true">
                                <option value="Стандартный" selected>Стандартный</option>
                                <option value="Нестандартный">Нестандартный</option>
                            </select>
                            <ul class="selectbox__selectlist"></ul>
                        </div>

                        <label for="volume" class="technics__label">Объем ковша (м3)</label>
                        <div class="selectbox">
                            <select name="volume" id="volume">
                                <option value="1,3" selected>1,3</option>
                                <option value="2,3">2,3</option>
                            </select>
                            <ul class="selectbox__selectlist"></ul>
                        </div>
                    </div>

                    <div class="technics__allfilters-col">
                        <label for="perevozka1" class="technics__label">Перевозка</label>
                        <div class="checkradio">
                            <input type="radio" name="perevozka" id="perevozka1" checked value="Да">
                            <label for="perevozka1"><span></span>Да</label>
                        </div>
                        <div class="checkradio">
                            <input type="radio" name="perevozka" id="perevozka2" value="Нет">
                            <label for="perevozka2"><span></span>Нет</label>
                        </div>

                        <label for="inprice1" class="technics__label">Учесть в стоимость</label>
                        <div class="checkradio">
                            <input type="checkbox" name="inprice" id="inprice1" checked>
                            <label for="inprice1"><span></span>Наличие продоплаты</label>
                        </div>
                        <div class="checkradio">
                            <input type="checkbox" name="inprice" id="inprice2">
                            <label for="inprice2"><span></span>Перевозка за счет заказчика</label>
                        </div>
                        <div class="checkradio">
                            <input type="checkbox" name="inprice" id="inprice3">
                            <label for="inprice3"><span></span>ГСМ</label>
                        </div>
                        <div class="checkradio">
                            <input type="checkbox" name="inprice" id="inprice4">
                            <label for="inprice4"><span></span>Оператор</label>
                        </div>
                        <div class="checkradio">
                            <input type="checkbox" name="inprice" id="inprice5">
                            <label for="inprice5"><span></span>Работа в 2 смены</label>
                        </div>
                        <div class="checkradio">
                            <input type="checkbox" name="inprice" id="inprice6">
                            <label for="inprice6"><span></span>Мин. количество смен в месяц</label>
                        </div>
                        <div class="checkradio">
                            <input type="checkbox" name="inprice" id="inprice7">
                            <label for="inprice7"><span></span>Мин. количество часов в смены</label>
                        </div>
                        <div class="checkradio">
                            <input type="checkbox" name="inprice" id="inprice8" disabled>
                            <label for="inprice8"><span></span>Проживание за счет заказчика</label>
                        </div>
                        <div class="checkradio">
                            <input type="checkbox" name="inprice" id="inprice9" disabled>
                            <label for="inprice9"><span></span>Питание за счет заказчика</label>
                        </div>
                        <div class="checkradio">
                            <input type="checkbox" name="inprice" id="inprice10">
                            <label for="inprice10"><span></span>Охрана техники</label>
                        </div>
                    </div>
                </div>

                <div class="technics__allfilters-row">
                    <div class="technics__allfilters-col">
                        <label for="maxkovsh" class="technics__label">Макс. высота разгрузки ковша (мм)</label>
                        <div class="parameter-slider">
                            <div class="slider" data-from="0" data-to="600"></div>
                            <input type="text" class="number_from" name="massfrom">
                            <input type="text" class="number_to" name="massto">
                        </div>
                    </div>

                    <div class="technics__allfilters-col">
                        <label for="srokarendi" class="technics__label">Срок аренды</label>
                        <div class="dates-input-block">
                            <div class="dates-input-block__dates">
                                <p class="datefrom">20.10</p>
                                <span class="technics__bigarrow"></span>
                                <p class="dateto">21.10</p>
                            </div>
                            <img src="bitrix/templates/fdr_blackidea/img/icon_calendar.svg" alt="@@" class="dates-input-block__icon" width="31" height="27" data-dateopen="technics_datepicker">
                            <div class="datepicker" id="technics_datepicker" data-leftinfo="true"></div>

                            <input type="text" value="" class="inputdatefrom" name="srokarendifrom">
                            <input type="text" value="" class="inputdateto" name="srokarendito">
                        </div>
                    </div>
                </div>

                <div class="technics__allfilters-row">
                    <div class="technics__allfilters-col">
                        <label for="nalicieoborud" class="technics__label">Наличие навесного оборудования</label>
                        <div class="selectbox">
                            <select name="nalicieoborud" id="nalicieoborud">
                                <option value="Выбрать" selected>Выбрать</option>
                                <option value="Да">Да</option>
                            </select>
                            <ul class="selectbox__selectlist"></ul>
                        </div>
                    </div>

                    <div class="technics__allfilters-col">
                        <label for="expluatplace" class="technics__label">Место эксплуатации</label>
                        <input type="text" id="expluatplace" placeholder="Введите адрес">
                    </div>
                </div>

            </div>
            <div class="technics__allfilters-bg"><img src="bitrix/templates/fdr_blackidea/img/calculator/filters-bg.jpg" alt="@@"></div>
        </form>

	</section>

	<!-------------------------------------------------->

	<section class="advantages">
		<div class="container">
			<h2>Преимущества сервиса</h2>
			<ul class="advantages__list">
				<li>
					<div class="image"><img src="bitrix/templates/fdr_blackidea/img/icon_advantages_1.svg" alt="@@"></div>
					<p>Быстрый поиск доступных предложений по аренде спецтехники </p>
				</li>
				<li>
					<div class="image"><img src="bitrix/templates/fdr_blackidea/img/icon_advantages_2.svg" alt="@@"></div>
					<p>Простой способ бронирования <br>и получения техники </p>
				</li>
				<li>
					<div class="image"><img src="bitrix/templates/fdr_blackidea/img/icon_advantages_3.svg" alt="@@"></div>
					<p>Гарантии технического состояния техники и уровня квалификации операторов </p>
				</li>
				<li>
					<div class="image"><img src="bitrix/templates/fdr_blackidea/img/icon_advantages_4.svg" alt="@@"></div>
					<p>Полноценное информационное <br>и документарное сопровождение <br>и поддержка заказов </p>
				</li>
			</ul>
		</div>
	</section>

	<!-------------------------------------------------->

	<section class="sale">
		<div class="container">
			<div class="sale__bg">
				<!-- Mobile -->
				<a class="sale__mobileblock" href="#">
					<p class="small">с 16/09/16 по 30/09/16</p>
					<p>Быстрая аренда спецтехники <br> по оптовым ценам</p>
				</a>
				<!-- Desktop -->
				<div class="sale__desktopblock">
					<p class="heading">Аренда спецтехники</p>
					<p>При заказе свыше пяти смен <br>предоставляется скидка!</p>
					<a href="#" class="button button_green"><span class="button__border-top"></span>Подробнее<span class="button__border-bottom"></span></a>
				</div>

				<div class="sale__bg-gradients"><span></span><span></span></div>
				<img src="bitrix/templates/fdr_blackidea/img/bg_sale.jpg" alt="@@">
			</div>
			<p class="sale__link"><a href="#">Все акции <img src="bitrix/templates/fdr_blackidea/img/icon_arrow_right_2.svg" alt="@@" width="31" class="bounce"></a></p>
		</div>
	</section>

	<!-------------------------------------------------->

	<section class="news">
		<div class="container">
			<h2>Новости</h2>
			<div class="newsblocks">
				<a href="newspage.php" class="news-linkblock">
					<div class="bg"></div>
					<img src="bitrix/templates/fdr_blackidea/img/news_1.jpg" alt="@@">
					<p class="small">16/09/16</p>
					<p>Специалисты <br>проводят работы <br>по объекту</p>
				</a>
				<a href="newspage.php" class="news-linkblock">
					<div class="bg"></div>
					<img src="bitrix/templates/fdr_blackidea/img/news_2.jpg" alt="@@">
					<p class="small">03/09/16</p>
					<p>Специалисты <br>проводят работы <br>по объекту</p>
				</a>
			</div>
			<p class="news__link"><a href="#">Все новости <img src="bitrix/templates/fdr_blackidea/img/icon_arrow_right_2.svg" alt="@@" width="31" class="bounce"></a></p>
		</div>
	</section>

	<!-------------------------------------------------->

	<section class="banners">
		<div class="container">
			<!-- Desktop -->
			<div class="banners__block">
				<img src="bitrix/templates/fdr_blackidea/img/banner_1.png" alt="@@">
			</div>
			<!-- Desktop -->
			<div class="banners__block banners__block_wide">
				<img src="bitrix/templates/fdr_blackidea/img/banner_2.png" alt="@@">
			</div>
			<!-- Desktop -->
			<div class="banners__block">
				<img src="bitrix/templates/fdr_blackidea/img/banner_3.png" alt="@@">
			</div>
			<div class="banners__block banners__block_wide">
				<img src="bitrix/templates/fdr_blackidea/img/banner_4.png" alt="@@">
				<img src="bitrix/templates/fdr_blackidea/img/banner_5.png" alt="@@">
			</div>
		</div>
	</section>

	<!-------------------------------------------------->

	<section class="accordion">
		<div class="container">
			<p class="accordion__button" data-accordion="infoaccordion">Информация о сервисе<span class="accordion__arrow">
			    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.09 14.46"><defs><style>.cls-1{fill:none;stroke:#2ca447;stroke-linecap:square;stroke-miterlimit:10;stroke-width:2px;}</style></defs><line class="cls-1" x1="13.04" y1="13.04" x2="24.67" y2="1.41"/><line id="_Контур_2" data-name="&lt;Контур&gt;" class="cls-1" x1="13.04" y1="13.04" x2="1.41" y2="1.41"/></svg>
			</span></p>
			<div class="accordion__info" id="infoaccordion">
			     <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p>
			</div>
		</div>
	</section>
    </div>

	<!-------------------------------------------------->

</div>



 <?/*$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"",
	Array(
		"IBLOCK_TYPE" => "books",
		"IBLOCK_ID" => "6",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "/e-store/books/#SECTION_ID#/",
		"COUNT_ELEMENTS" => "Y",
		"DISPLAY_PANEL" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	)
);?>
<hr />

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.top",
	"",
	Array(
		"IBLOCK_TYPE" => "books",
		"IBLOCK_ID" => "6",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"SECTION_URL" => "/e-store/books/#SECTION_ID#/",
		"DETAIL_URL" => "/e-store/books/#SECTION_ID#/#ELEMENT_ID#/",
		"BASKET_URL" => "/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"DISPLAY_COMPARE" => "N",
		"ELEMENT_COUNT" => "3",
		"LINE_ELEMENT_COUNT" => "1",
		"PROPERTY_CODE" => Array(),
		"PRICE_CODE" => Array("RETAIL"),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	)
);?>

<h2>Видео-новости</h2>

<?$APPLICATION->IncludeComponent(
	"bitrix:player",
	"",
	Array(
		"PLAYER_TYPE" => "auto",
		"USE_PLAYLIST" => "N",
		"PATH" => "/upload/intro.flv",
		"WIDTH" => "400",
		"HEIGHT" => "324",
		"FULLSCREEN" => "Y",
		"SKIN_PATH" => "/bitrix/components/bitrix/player/mediaplayer/skins",
		"SKIN" => "bitrix.swf",
		"CONTROLBAR" => "bottom",
		"WMODE" => "transparent",
		"HIDE_MENU" => "N",
		"SHOW_CONTROLS" => "Y",
		"SHOW_STOP" => "N",
		"SHOW_DIGITS" => "Y",
		"CONTROLS_BGCOLOR" => "FFFFFF",
		"CONTROLS_COLOR" => "000000",
		"CONTROLS_OVER_COLOR" => "000000",
		"SCREEN_COLOR" => "000000",
		"WMODE_WMV" => "window",
		"AUTOSTART" => "N",
		"REPEAT" => "N",
		"VOLUME" => "90",
		"DISPLAY_CLICK" => "play",
		"MUTE" => "N",
		"HIGH_QUALITY" => "Y",
		"ADVANCED_MODE_SETTINGS" => "N",
		"BUFFER_LENGTH" => "10",
		"DOWNLOAD_LINK_TARGET" => "_self"
	),
false
);?>

<!-- --><h2>Новые фотографии</h2>
<?$APPLICATION->IncludeComponent(
	"bitrix:photogallery.detail.list",
	".default",
	Array(
		"IBLOCK_TYPE" => "photos",
		"IBLOCK_ID" => "10",
		"BEHAVIOUR" => "USER",
		"USER_ALIAS" => $_REQUEST["USER_ALIAS"],
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"ELEMENT_LAST_TYPE" => "none",
		"USE_DESC_PAGE" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"PAGE_ELEMENTS" => "6",
		"DETAIL_URL" => "/content/gallery/#USER_ALIAS#/#SECTION_ID#/#ELEMENT_ID#/",
		"DETAIL_SLIDE_SHOW_URL" => "/content/gallery/#USER_ALIAS#/#SECTION_ID#/#ELEMENT_ID#/slide_show/",
		"SEARCH_URL" => "/content/gallery/search/",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"PAGE_NAVIGATION_TEMPLATE" => "",
		"USE_PERMISSIONS" => "N",
		"GROUP_PERMISSIONS" => array(0=>"1",1=>"",),
		"COMMENTS_TYPE" => "none",
		"SET_TITLE" => "N",
		"DATE_TIME_FORMAT" => "d.m.Y",
		"ADDITIONAL_SIGHTS" => array(),
		"PICTURES_SIGHT" => "",
		"THUMBNAIL_SIZE" => "90",
		"SHOW_PAGE_NAVIGATION" => "none",
		"SHOW_CONTROLS" => "N",
		"SHOW_RATING" => "N",
		"SHOW_SHOWS" => "N",
		"SHOW_COMMENTS" => "N",
		"SHOW_TAGS" => "N",
		"MAX_VOTE" => "5",
		"VOTE_NAMES" => array(0=>"1",1=>"2",2=>"3",3=>"4",4=>"5",5=>"",)
	)
);*/?><!-- -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>