<form action="send.php" method="post" class="bottom-contact-form">
	<div class="container">
		<p class="bottom-contact-form__heading">Обратная связь</p>
		<div class="bottom-contact-form__fields">
			<div class="bottom-contact-form__field">
				<p>Имя</p>
				<input type="text" name="name">
			</div>
			<div class="bottom-contact-form__field">
				<p>Телефон</p>
				<input type="tel" name="telephone">
			</div>
			<div class="bottom-contact-form__field">
				<p>Email</p>
				<input type="email" name="email">
			</div>
			<div class="bottom-contact-form__field bottom-contact-form__field_file">
				<p>Вложения</p>
				<p class="bottom-contact-form__file">technika.jpg<a href="#"></a></p>
				<p class="small">Разрешенные расширения: .jpg, .png, .jpeg, .gif</p>
			</div>
			<div class="bottom-contact-form__field bottom-contact-form__field_message">
				<p>Сообщение</p>
				<textarea name="message"></textarea>
			</div>
		</div>
		<button class="button bottom-contact-form__button"><span class="button__border-top"></span>отправить<span class="button__border-bottom"></span></button>
	</div>
</form>