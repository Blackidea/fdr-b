<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?> 


<?php include "blocks/footer.php"; ?>

</div>

<?php include "blocks/forms.php"; ?>



<!--[if lt IE 9]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script><![endif]-->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script src="<?=$APPLICATION->GetTemplatePath("js/jquery-2.1.3.min.js");?>"></script>

<!-- Маска поля ввода !-->
<script src="<?=$APPLICATION->GetTemplatePath("js/inputmask.js");?>"></script>
<script src="<?=$APPLICATION->GetTemplatePath("js/jquery.inputmask.js");?>"></script>

<!-- Плавное появление блоков !-->
<script src="<?=$APPLICATION->GetTemplatePath("js/scrollReveal.js");?>"></script>

<!-- Плавные анимации !-->
<script src="<?=$APPLICATION->GetTemplatePath("js/jquery.easing.js");?>"></script>

<!-- AJAX-форма !-->
<script src="<?=$APPLICATION->GetTemplatePath("js/jquery.form.js");?>"></script>

<!-- Карусель и модальные окна !-->
<script src="<?=$APPLICATION->GetTemplatePath("js/owl/owl.carousel.min.js");?>"></script>
<script type="text/javascript" src="<?=$APPLICATION->GetTemplatePath("js/fancybox/jquery.fancybox.pack.js");?>"></script>

<!-- jQuery UI !-->
<script src="<?=$APPLICATION->GetTemplatePath("js/jqueryui/jquery-ui.js");?>"></script>
<script src="<?=$APPLICATION->GetTemplatePath("js/datepicker-ru.js");?>"></script>
<!-- SelectBoxIt !-->
<script src="<?=$APPLICATION->GetTemplatePath("js/selectbox.js");?>"></script>

<!-- Lazy Load !-->
<script src="<?=$APPLICATION->GetTemplatePath("js/jquery.lazyload.min.js");?>"></script>

<script src="<?=$APPLICATION->GetTemplatePath("js/scripts.min.js");?>"></script>

<script src="<?=$APPLICATION->GetTemplatePath("js/main-calculator.js");?>"></script>
</body>
</html>