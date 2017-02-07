<form action="send.php" method="post" class="bottom-contact-form bottom-contact-form_question">
	<div class="container">
		<p class="bottom-contact-form__heading">Не нашли ответа<br> на вопрос?</p>
		<div class="bottom-contact-form__fields">
			<div class="bottom-contact-form__field">
				<p><span>*</span>Имя</p>
				<input type="text" name="name">
			</div>
			<div class="bottom-contact-form__field">
				<p><span>*</span>Телефон</p>
				<input type="tel" name="telephone">
			</div>
			<div class="bottom-contact-form__field">
				<p><span>*</span>Email</p>
				<input type="email" name="email">
			</div>
			<div class="bottom-contact-form__field bottom-contact-form__field_message">
				<p>Сообщение</p>
				<textarea name="message"></textarea>
			</div>
			<p class="small"><span>*</span>- поля обязательные для заполнения</p>
		</div>
		<button class="button bottom-contact-form__button"><span class="button__border-top"></span>отправить<span class="button__border-bottom"></span></button>
	</div>
</form>