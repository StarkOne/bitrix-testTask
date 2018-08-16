<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<html lang="ru">
  <head>
  	<?php 
		use Bitrix\Main\Page\Asset;
		$APPLICATION->ShowHead();
	?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php 
    	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
    	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
      Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">');
    	Asset::getInstance()->addString('<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>');
    	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
    ?>

  </head>

  <body>
  	<div id="panel">
  		<?php $APPLICATION->ShowPanel(); ?>
  	</div>
    <header>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="/" class="navbar-brand d-flex align-items-center">
            <strong>Тестовое задание</strong>
          </a>
        </div>
      </div>
    </header>