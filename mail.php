<?php

$recepient = "test@marketica.pro";

$name = htmlspecialchars(trim($_POST["name"]));
$text = htmlspecialchars(trim($_POST["mess"]));
$message = "Имя: $name \nТекст: $text";

$pagetitle = "Тестовое задание";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");