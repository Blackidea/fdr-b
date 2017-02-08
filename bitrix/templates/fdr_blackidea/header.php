<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-type" content="text/html; utf-8">
    <meta http-equiv="Content-language" content="ru-RU"> 
    <meta name="robots" content="all">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?$APPLICATION->ShowHead()?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/> 
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    
    <link rel="stylesheet" href="<?=$APPLICATION->GetTemplatePath("css/normalize.css")?>"/>
    <link rel="stylesheet" href="<?=$APPLICATION->GetTemplatePath("fonts/fonts.css")?>"/>
    
    <link rel="stylesheet" href="<?=$APPLICATION->GetTemplatePath("js/owl/owl.carousel.css")?>"/>
    <link rel="stylesheet" href="<?=$APPLICATION->GetTemplatePath('js/fancybox/jquery.fancybox.css')?>"/>
    <link rel="stylesheet" href="<?=$APPLICATION->GetTemplatePath('js/jqueryui/jquery-ui.css')?>"/>
    <link rel="stylesheet" href="<?=$APPLICATION->GetTemplatePath('css/default.css')?>"/>
    <script src="<?=$APPLICATION->GetTemplatePath("js/jquery-2.1.3.min.js");?>"></script>
</head>

<body class="mainpage">
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
    
    <?php include "blocks/burgermenu.php"; ?>
    <?php include "blocks/header.php"; ?>
    <div class="page">
    	<div class="overlay"></div>


      