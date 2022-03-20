<?php

$content = renderTemplate("content", 12);
$menu = renderTemplate("menu");

echo renderTemplate('layout', $content, $menu);

function renderTemplate($page, $content = '', $menu = '')
{
    ob_start();
    include $page . '.php';
    return ob_get_clean();
}
