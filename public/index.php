<?php
require_once dirname(__DIR__) . '/lib/functions.php';
$content = get_page();
$title = $attrs->title;
//$title = get_title();
$css = get_css([
        'commons',
    ]
);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <!--    <link rel="stylesheet" href="/public/assets/css/commons.css">-->
    <?= $css ?>
</head>
<body>
<header class="header header_h50">
    <div class="header__logo logo"><h1><a class="logo__name" href="/"><?= SITENAME ?></a></h1></div>
    <nav class="header__nav">
        <ul class="header__menu menu">
            <li class="menu__item">
                <span class="menu__link">Задания</span>
                <ul class="menu__submenu submenu">
                    <li class="submenu__item">
                        <a href="/pr1" class="submenu__link">Практическая 1</a>
                        <ul class="submenu__subsubmenu subsubmenu">
                            <li class="subsubmenu__item">
                                <a href="/pr1/z1" class="subsubmenu__link">Задание 1</a>
                            </li>
                            <li class="subsubmenu__item">
                                <a href="/pr1/z2" class="subsubmenu__link">Задание 2</a>
                            </li>
                            <li class="subsubmenu__item">
                                <a href="/pr1/z3" class="subsubmenu__link">Задание 3</a>
                            </li>
                            <li class="subsubmenu__item">
                                <a href="/pr1/z4" class="subsubmenu__link">Задание 4</a>
                            </li>
                            <li class="subsubmenu__item">
                                <a href="/pr1/z5" class="subsubmenu__link">Задание 5</a>
                            </li>
                            <li class="subsubmenu__item">
                                <a href="/pr1/z6" class="subsubmenu__link">Задание 6</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu__item">
                        <a href="/pr1" class="submenu__link">Практическая 2</a>
                        <ul class="submenu__subsubmenu subsubmenu">
                            <li class="subsubmenu__item">
                                <a href="/pr2/z1" class="subsubmenu__link">Задание 1</a>
                            </li>
                            <li class="subsubmenu__item">
                                <a href="/pr2/z2" class="subsubmenu__link">Задание 2</a>
                            </li>
                            <li class="subsubmenu__item">
                                <a href="/pr2/z3" class="subsubmenu__link">Задание 3</a>
                            </li>
                            <li class="subsubmenu__item">
                                <a href="/pr2/z4" class="subsubmenu__link">Задание 4</a>
                            </li>
                            <li class="subsubmenu__item">
                                <a href="/pr2/z5" class="subsubmenu__link">Задание 5</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu__item">
                <span class="menu__link">Решения</span>
            </li>
        </ul>
    </nav>
</header>
<main>
    <?php
    if(isset($_GET['page'])):
    ?>
        <section class="head">
            <div class="head__title title">
                <h2 class="title__text"><?= $attrs->h2 ?></h2>
            </div>
            <?php
            if(!empty($attrs->breadcrumbs)):
            ?>

            <div class="head__breadcrumbs breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a href="/" class="breadcrumbs__link">Главная</a></li>
                    <?php
                    foreach ($attrs->breadcrumbs as $crumb):
                        if (isset($crumb['link'])):
                            ?>
                            <li class="breadcrumbs__item"><a href="<?= $crumb['link'] ?>" class="breadcrumbs__link"><?= $crumb['title'] ?></a></li>
                        <?php
                        else:
                            ?>
                            <li class="breadcrumbs__item"><span class="breadcrumbs__text"><?=
                                    $crumb['title']
                                    ?></span></li>
                        <?php
                        endif;
                    endforeach;
                    ?>
                </ul>
            </div>
            <?php
            endif;
            ?>

        </section>
    <?php
    endif;
    ?>

    <section class="main">
        <?= $content ?>
    </section>
</main>
</body>
</html>