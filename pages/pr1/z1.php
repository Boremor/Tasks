<?php
global $attrs;
$attrs->breadcrumbs = [
    [
        'title' => 'Практическая 1',
        'link' => '/pr1',
    ],
    [
        'title' => 'Задание 1',
    ],
];
$attrs->title = 'Задание 1';
$attrs->h2 = 'Задание 1';

$a = 154;
$b = 1.57;
$c = 'Hello, world!';
$d = true;

echo 'Переменным присвоены значения: <br>';
echo '$a = ' . $a . ' - тип переменной (' . gettype($a) . ')<br>';
echo '$b = ' . $b . ' - тип переменной (' . gettype($b) . ')<br>';
echo '$c = ' . $c . ' - тип переменной (' . gettype($c) . ')<br>';
echo '$d = ' . $d . ' - тип переменной (' . gettype($d) . ')<br>';