<?
$MESS["SEC_REDIRECT_TITLE"] = "Защита редиректов от фишинга";
$MESS["SEC_REDIRECT_MAIN_TAB"] = "Защита редиректов";
$MESS["SEC_REDIRECT_MAIN_TAB_TITLE"] = "Включение защиты редиректов от фишинга.";
$MESS["SEC_REDIRECT_ON"] = "Защита редиректов от фишинга включена";
$MESS["SEC_REDIRECT_OFF"] = "Защита редиректов от фишинга выключена";
$MESS["SEC_REDIRECT_BUTTON_OFF"] = "Выключить защиту редиректов от фишинга";
$MESS["SEC_REDIRECT_BUTTON_ON"] = "Включить защиту редиректов от фишинга";
$MESS["SEC_REDIRECT_NOTE"] = "<p>Фишинг (англ. phishing, от password - пароль и fishing - рыбная ловля, выуживание) - вид интернет-мошенничества, целью которого является получение доступа к конфиденциальным данным пользователей (например, логинам и паролям).</p>
<p>Это достигается путем проведения массовых рассылок электронных писем от имени популярных брендов, например, от имени социальных сетей, банков, порталов. В письме часто содержится прямая ссылка на сайт, внешне не отличимая от настоящей.</p>
<p>Фишинг основан на незнании пользователями основ сетевой безопасности: в частности, многие не знают простого факта: сервисы не рассылают писем с просьбами сообщить свои учётные данные, пароль и прочее.</p>
<p>Защита редиректов от фишинга осуществляется двумя методами:
<ul style=\"font-size:100%\">
<li>Во-первых, можно определить злонамеренный редирект по отсутствию заголовка http протокола - ссылающаяся страница.</li>
<li>Во-вторых, можно подписать ссылки, генерируемые на сайте, цифровой подписью и проверять эту подпись при попытке редиректа.</li>
</ul>
</p>
<p>Защита может заключаться в следующих вариантах действий:
<ul style=\"font-size:100%\">
<li>Или показать пользователю предупреждение, что он будет перенаправлен на другой сайт и показать на какой именно.</li>
<li>Или принудительно перенаправить его на заведомо безопасный адрес. Например, главную страницу атакуемого сайта.</li>
</ul>
</p>
<p><i>Рекомендуется включить для высокого уровня.</i></p>";
$MESS["SEC_REDIRECT_PARAMETERS_TAB"] = "Параметры";
$MESS["SEC_REDIRECT_PARAMETERS_TAB_TITLE"] = "Настройка параметров защиты редиректов";
$MESS["SEC_REDIRECT_METHODS_HEADER"] = "Методы";
$MESS["SEC_REDIRECT_METHODS"] = "Методы защиты от фишинга:";
$MESS["SEC_REDIRECT_REFERER_CHECK"] = "Проверять наличие HTTP-заголовка, описывающего ссылающуюся страницу.";
$MESS["SEC_REDIRECT_REFERER_SITE_CHECK"] = "HTTP-заголовок, описывающий ссылающуюся страницу, должен содержать текущий сайт.";
$MESS["SEC_REDIRECT_HREF_SIGN"] = "Добавлять цифровую подпись к перечисленным ниже URL.";
$MESS["SEC_REDIRECT_URLS"] = "Подписываемые URLs";
$MESS["SEC_REDIRECT_SYSTEM"] = "Системные";
$MESS["SEC_REDIRECT_USER"] = "Пользовательские";
$MESS["SEC_REDIRECT_URL"] = "URL:";
$MESS["SEC_REDIRECT_PARAMETER_NAME"] = "Имя параметра:";
$MESS["SEC_REDIRECT_ADD"] = "Добавить";
$MESS["SEC_REDIRECT_ACTIONS_HEADER"] = "Действия";
$MESS["SEC_REDIRECT_ACTIONS"] = "Действия защиты от фишинга:";
$MESS["SEC_REDIRECT_ACTION_SHOW_MESSAGE"] = "Перенаправить на другой сайт с показом сообщения и задержкой.";
$MESS["SEC_REDIRECT_MESSAGE"] = "Сообщение:";
$MESS["SEC_REDIRECT_TIMEOUT"] = "Задержка:";
$MESS["SEC_REDIRECT_TIMEOUT_SEC"] = "секунд.";
$MESS["SEC_REDIRECT_LOG"] = "Занести попытку фишинга в журнал";
$MESS["SEC_REDIRECT_ACTION_REDIRECT"] = "Перенаправить на заданный URL.";
$MESS["SEC_REDIRECT_ACTION_REDIRECT_URL"] = "URL:";
?>