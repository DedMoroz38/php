<?php
$h1 = "Главная страница";
$title = 'GeekBrains';
$currentYear = '2022';

$content = file_get_contents('site.html');

$content = str_replace('{{ h1 }}',  $h1, $content);
$content = str_replace('{{ title }}',  $title, $content);
$content = str_replace('{{ currentYear }}',  $currentYear, $content);

echo $content;
