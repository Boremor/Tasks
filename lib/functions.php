<?php
include 'config.php';

function dd($el)
{
    echo '<pre>';
    var_dump($el);
    echo '</pre>';
}

function get_page()
{
    if (!empty($_GET['page'])) {
        ob_start();
        $path = PAGES . '/' . $_GET['page'] . '.php';
        if(file_exists($path)) {
            require PAGES . '/' . $_GET['page'] . '.php';
        } elseif (file_exists(PAGES . '/' . $_GET['page'] . '/index.php')){
            require PAGES . '/' . $_GET['page'] . '/index.php';
        } else {
            require PAGES . '/404.php';
        }
        return ob_get_clean();
    } else {
        ob_start();
        require PAGES . '/main.php';
        return ob_get_clean();
    }
}

function get_title()
{
    $title = 'Главная страница';
    if (!empty($_GET['page'])) {
        $req = explode('/', $_GET['page']);
        if (stripos($req[0], 'pr') !== false) {
            $title = str_replace('pr', 'Практическая-', $req[0]);
        }
        if (isset($req[1])) {
            if (strpos($req[1], 'z') !== false) {
                $title .= ' | ' . str_replace('z', 'Задание ', $req[1]);
            }
        }
    }
    return $title;
}

function get_css($file_names = [])
{
    $links = '';
    foreach ($file_names as $file) {
        $links .= '<link rel="stylesheet" href="/public/assets/css/' . $file . '.css">';
    }
    return $links;
}