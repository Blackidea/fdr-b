<!-- Всплывающая форма заявки !-->
<!-- <form class="popup" id="popup" action="send.php" method="post">
	<p>Заполните заявку!</p>
    <input type="name" name="name" placeholder="Ваше имя" required/>
    <input type="tel" name="tel" placeholder="Телефон" required/>
    <input type="email" name="email" placeholder="E-mail" required/>
    <button class="button" type="submit">Отправить</button>
</form> -->

<div class="page-preloader"><img src="bitrix/templates/fdr_blackidea/img/ripple.svg" alt="@@"></div>

<!-- Окно "спасибо за заявку" !-->
<div class="popup" id="successnews">
	<p class="huge">Спасибо!</p>
	<p>Спасибо за подписку на наши новости.</p>
	<a href="" class="button button_green"><span class="button__border-top"></span>Подобрать технику<span class="button__border-bottom"></span></a>
</div>

<!-- Окно "спасибо за заявку" !-->
<div class="popup" id="successsales">
	<p class="huge">Спасибо!</p>
	<p>Спасибо за подписку на наши акции.</p>
	<a href="" class="button button_green"><span class="button__border-top"></span>Подобрать технику<span class="button__border-bottom"></span></a>
</div>

<!-- Окно "закрывающие документы" !-->
<div class="popup closedocs" id="closedocs">
	<p class="huge">Закрывающие документы</p>
	<a href="" class="button button_green"><span class="button__border-top"></span>Запросить<span class="button__border-bottom"></span></a>
</div>

<!-- Окно "спасибо за заявку" !-->
<div class="popup" id="success">
	<p class="huge">Спасибо!</p>
	<p>Ваша заявка принята. <br>
	В ближайшее время наши менеджеры свяжутся с Вами.</p>
	<a href="" class="button button_green"><span class="button__border-top"></span>Подобрать технику<span class="button__border-bottom"></span></a>
</div>

<!-- Окно "запрос на бронь" !-->
<div class="popup" id="booking-request">
	<p class="huge">Запрос на бронь</p>
	<p>У вас хотят забронировать технику Бульдозер <span>KOMATSU D65-E12</span> <br> с <span>12.09.2016</span> по <span>24.09.2016</span></p>
	<a href="" class="button button_green"><span class="button__border-top"></span>Подтвердить<span class="button__border-bottom"></span></a>
	<a href="" class="button button_grey"><span class="button__border-top"></span>Отказать<span class="button__border-bottom"></span></a>
</div>

<!-- Окно "получить счет" !-->
<div class="popup getbill" id="get-bill">
	<p class="huge">Получить счет</p>
	<div class="formfield">
		<p>Введите email</p>
		<input type="text">
	</div>
	<a href="#" class="button button_green button_noborder"><img src="bitrix/templates/fdr_blackidea/img/icon_download.svg" alt="@@" width="29">Скачать</a>
	<a href="#" class="button button_green button_noborder"><img src="bitrix/templates/fdr_blackidea/img/icon_print.svg" alt="@@" width="28">Распечатать</a>
	<div class="buttonblock">
		<a href="#" class="button button_green"><span class="button__border-top"></span>Готово<span class="button__border-bottom"></span></a>
	</div>
</div>

<!-- Окно "удалить технику" !-->
<div class="popup deletetechnics" id="delete-technics">
	<p class="huge">Удалить технику</p>
	<div class="formfield">
		<p>Выберите действие</p>
		<div class="radiodiv">
			<input name="action" type="radio" id="delradio1" value="delete">
			<label for="delradio1"><span></span></label>
			<p>Удалить</p>
		</div>
		<div class="radiodiv">
			<input name="action" type="radio" id="delradio2" value="toarchive">
			<label for="delradio2"><span></span></label>
			<p>В архив</p>
		</div>
	</div>
	<p class="small">В случае удаления, технику нельзя будет восстановить<br>
	и ее придется добавлять вручную</p>
	<a href="#" class="button button_green"><span class="button__border-top"></span>Готово<span class="button__border-bottom"></span></a>
</div>

<!-- Окно "порверить наличие" !-->
<div class="popup checkpopup" id="check-for-available">
	<p class="huge">Проверить наличие</p>
	<p>После начала проверки наличия техники у Вас будет 24 часа на её оплату. В течении этого времени техника гарантировано закреплена за Вами. В случае, если Вы не успеваете по какой либо причине оплатить Ваш заказ, то вы можете запросить продление данного времени, перейдя по соответствующей ссылке в личном кабинете в разделе "Заказы", указав причину по которой Вы хотите продлить время, позвонить по телефону горячей линии, и указать номер заказа,  либо отменить бронь досрочно. Оставшееся время будет указано в заказе. По истечению 24 часов заказ автоматически будет удален.</p>
	<div class="checkdiv">
		<input type="checkbox" id="infocheck1">
		<label for="infocheck1"><img src="bitrix/templates/fdr_blackidea/img/icon_check_2.svg" alt="@@" width="14"></label>
		<p>С указанной выше информацией ознакомлен</p>
	</div>
	<a href="#" class="button button_green"><span class="button__border-top"></span>Отправить<span class="button__border-bottom"></span></a>
</div>

<!-- Окно "Оплата заказа" !-->
<form class="popup paymentpopup" id="full-payment">
	<div class="container">
		<p class="formheading">Оплата заказа</p>
		<div class="formpart">
			<p>Сумма оплаты</p>
			<p class="total">210 000 руб.</p>
		</div>
		<div class="formpart">
			<p>Введите сумму оплаты (предоплаты)</p>
			<input type="text">
			<p class="small">Не менее суммы N</p>
		</div>
		<div class="formpart">
			<p>Выберите тип оплаты</p>
			<div class="radiodiv">
				<input name="paymenttype" type="radio" id="popupradio1" value="online">
				<label for="popupradio1"><span></span></label>
				<p>Онлайн</p>
			</div>
			<div class="radiodiv">
				<input name="paymenttype" type="radio" id="popupradio2" value="count">
				<label for="popupradio2"><span></span></label>
				<p>Получить счет</p>
			</div>
		</div>
		<p class="small mobile">*Фактом оплаты вы подтверждаете то, <br>
		что вы ознакомились и согласны с условиями <br>
		публичной оферты</p>
		<button class="button button_green"><span class="button__border-top"></span>Оплатить<span class="button__border-bottom"></span></button>
	</div>
</form>

<!-- Окно "Оплата заказа (остаток)" !-->
<form class="popup paymentpopup" id="part-payment">
	<div class="container">
		<p class="formheading">Оплата заказа</p>
		<div class="formpart">
			<p>Сумма оплаты</p>
			<p class="total">105 000 руб.</p>
		</div>
		<div class="formpart">
			<p>Выберите тип оплаты</p>
			<div class="radiodiv">
				<input name="paymenttype" type="radio" id="popupradio3" value="online">
				<label for="popupradio3"><span></span></label>
				<p>Онлайн</p>
			</div>
			<div class="radiodiv">
				<input name="paymenttype" type="radio" id="popupradio4" value="count">
				<label for="popupradio4"><span></span></label>
				<p>Получить счет</p>
			</div>
		</div>
		<p class="small mobile">*Фактом оплаты вы подтверждаете то, <br>
		что вы ознакомились и согласны с условиями <br>
		публичной оферты</p>
		<button class="button button_green"><span class="button__border-top"></span>Оплатить<span class="button__border-bottom"></span></button>
	</div>
</form>

<!-- Окно "Продлить бронь" !-->
<div class="popup extendpopup" id="extend-reserve">
	<div class="container">
		<p class="heading">Продлить бронь</p>
		<p>Вы можете оставить запрос на продление времени оплаты. <br>
		Для этого укажите предпочтительное время, в течении которого вы сможете оплатить счет. Если счет уже оплачен, но статус заказа не изменился вы можете прикрепить копию платежного поручения или позвоните нам по телефону: </p>
		<p class="phone">8 800 349 01 78</p>
		<form action="">
			<div class="formfield">
				<p>На сколько продлить бронирование</p>
				<select name="" id="">
					<option value=""></option>
				</select>
			</div>
			<div class="formfield">
				<p>Причина</p>
				<input type="text">
			</div>
			<div class="formfield">
				<p>Платежное поручение</p>
				<p class="formfile">Выберите файл<a href="#"></a></p>
				<p class="small">Или другой подтверждающий документ, при необходимости</p>
			</div>
			<button class="button button_green"><span class="button__border-top"></span>Продлить<span class="button__border-bottom"></span></button>
		</form>
	</div>
</div>

<!-- Окно "Продлить время работ" !-->
<div class="popup extendpopup worktime" id="extend-worktime">
	<div class="container">
		<p class="heading">Продлить время работ</p>
		<p>Вы можете оставить запрос на продление времени работы техники. Для этого укажите новое время окончания работы единицы и дождитесь подтверждения или позвоните нам по телефону </p>
		<p class="phone">8 800 349 01 78</p>
		<form action="">
			<div class="formfield">
				<p>Желаемое время окончания работ</p>
				<p class="date"><a href=""></a></p>
			</div>
			<div class="formfield">
				<p>Техника, которую нужно продлить</p>
				<select name="" id="">
					<option value=""></option>
				</select>
			</div>
			<div class="formfield">
				<p>Примечание</p>
				<textarea></textarea>
			</div>
			<button class="button button_green"><span class="button__border-top"></span>Запросить<span class="button__border-bottom"></span></button>
		</form>
	</div>
</div>

<!-- Окно "создать обращение" !-->
<form class="popup createmessage" id="createmessage">
	<div class="container">
		<p class="huge">Создать обращение</p>
		<div class="formfield">
			<p>Имя</p>
			<input type="text">
		</div>
		<div class="formfield">
			<p>Email</p>
			<input type="text">
		</div>
		<div class="formfield">
			<p>Тема</p>
			<input type="text">
		</div>
		<div class="formfield">
			<p>Сообщение</p>
			<textarea></textarea>
		</div>
		<div class="formfield formfield_file">
			<p>Прикрепить файл</p>
			<p class="file">Выберите файл<a href="#"></a></p>
			<p class="small">Разрешенные расширения: .jpg, .png, .jpeg, .gif</p>
		</div>
		<button class="button button_green"><span class="button__border-top"></span>Отправить<span class="button__border-bottom"></span></button>
	</div>
</form>

<!-- Авторизация -->
<div class="authorization">
	<div class="bg"></div>
	<img src="bitrix/templates/fdr_blackidea/img/bg_autreg.jpg" alt="@@">
	<a href="#" class="close-button"></a>
	<div class="container">
		<p class="heading">Авторизация</p>
		<p>Нет аккаунта? <a href="#" class="register">Зарегистрируйтесь</a></p>
		<form action="send.php" method="post">
			<p class="big">Email/номер телефона</p>
			<input type="text">
			<p class="big">Пароль</p>
			<input type="text">
			<p class="small"><a href="#">Забыли пароль?</a></p>
			<button class="button button_green"><span class="button__border-top"></span>Войти<span class="button__border-bottom"></span></button>
		</form>
	</div>
</div>

<!-- Регистрация -->
<div class="registration">
	<div class="bg"></div>
	<img src="bitrix/templates/fdr_blackidea/img/bg_autreg.jpg" alt="@@">
	<a href="#" class="close-button"></a>
	<div class="container">
		<p class="heading">Регистрация</p>
		<p>Уже есть аккаунт? <a href="#" class="login">Авторизуйтесь</a></p>
		<a href="#" class="button"><span class="button__border-top"></span>Арендовать технику<span class="button__border-bottom"></span></a>
		<a href="#" class="button"><span class="button__border-top"></span>Сдать технику<span class="button__border-bottom"></span></a>
	</div>
</div>


<!-- Письма -->
<div class="letters__slider slider popup" id="letters__popup">
		<div class="letters__wrapper wrapper">
			<div class="letters__slide slide active" data-slide="1">
				<div class="image">
					<img src="bitrix/templates/fdr_blackidea/img/letter_1.png" alt="@@">
				</div>
				<p>Свидетельство о лучшей аренде спецтехники</p>
			</div>
			<div class="letters__slide slide active" data-slide="2">
				<div class="image">
					<img src="bitrix/templates/fdr_blackidea/img/letter_2.png" alt="@@">
				</div>
				<p>Свидетельство о лучшей аренде спецтехники</p>
			</div>
			<div class="letters__slide slide active" data-slide="3">
				<div class="image">
					<img src="bitrix/templates/fdr_blackidea/img/letter_1.png" alt="@@">
				</div>
				<p>Свидетельство о лучшей аренде спецтехники</p>
			</div>
			<div class="letters__slide slide active" data-slide="4">
				<div class="image">
					<img src="bitrix/templates/fdr_blackidea/img/letter_2.png" alt="@@">
				</div>
				<p>Свидетельство о лучшей аренде спецтехники</p>
			</div>
			<div class="letters__slide slide active" data-slide="5">
				<div class="image">
					<img src="bitrix/templates/fdr_blackidea/img/letter_1.png" alt="@@">
				</div>
				<p>Свидетельство о лучшей аренде спецтехники</p>
			</div>
		</div>
		<div class="letters__sliderarrows">
			<img src="bitrix/templates/fdr_blackidea/img/icon_slidearrow_green.svg" alt="@@" width="20" height="36" class="arrow left">
			<img src="bitrix/templates/fdr_blackidea/img/icon_slidearrow_green.svg" alt="@@" width="20" height="36" class="arrow right">
		</div>
	</div>