<?php
define('DIR', dirname(__DIR__));
define('PUBL', DIR . '/public');
define('ASSETS', PUBL . '/assets');
define('PAGES', DIR . '/pages');
define('SITENAME', 'Задания PHP');
$attrs = (object)[
    'title' => SITENAME,
    'h2' => SITENAME,
    'breadcrumbs' => [],
];