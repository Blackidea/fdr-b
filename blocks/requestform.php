<form action="send.php" method="post" class="bottom-contact-form bottom-contact-form_request">
	<div class="container">
		<p class="bottom-contact-form__heading">Оставьте заявку <br>
		на покупку техники</p>
		<div class="bottom-contact-form__fields">
			<div class="bottom-contact-form__field">
				<p>Название компании</p>
				<input type="text" name="name">
			</div>
			<div class="bottom-contact-form__field">
				<p><span>*</span>Контактный телефон</p>
				<input type="tel" name="telephone">
			</div>
			<div class="bottom-contact-form__field">
				<p><span>*</span>E-mail</p>
				<input type="email" name="email">
			</div>
			<div class="bottom-contact-form__field">
				<p><span>*</span>Имя контактного лица</p>
				<input type="email" name="email">
			</div>
			<div class="bottom-contact-form__field bottom-contact-form__field_message">
				<p>Сообщение</p>
				<textarea name="message"></textarea>
			</div>
			<div class="bottom-contact-form__field bottom-contact-form__field_file">
				<p>Вложения</p>
				<p class="bottom-contact-form__file">Выберите файл<a href="#"></a></p>
				<p class="small">Разрешенные расширения: .jpg, .png, .jpeg, .gif</p>
			</div>
			<p class="small"><span>*</span>- поля обязательные для заполнения</p>
		</div>
		<button class="button bottom-contact-form__button"><span class="button__border-top"></span>отправить<span class="button__border-bottom"></span></button>
	</div>
</form>