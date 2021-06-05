<?php
global $attrs;
$attrs->breadcrumbs = [
    [
        'title' => 'Практическая 1',
        'link' => '/pr1',
    ],
    [
        'title' => 'Задание 2',
    ],
];

$a = 2;
$b = 3;
$c = 1.5;
$d = 0.75;

echo 'Переменным присвоены значения: <br>';
echo '$a = ' . $a . ' - тип переменной (' . gettype($a). ')<br>';
echo '$b = ' . $b . ' - тип переменной (' . gettype($b). ')<br>';
echo '$c = ' . $c . ' - тип переменной (' . gettype($c). ')<br>';
echo '$d = ' . $d . ' - тип переменной (' . gettype($d). ')<br>';

echo '<br>Переменным присвоены значения:<br>';
$result = $a + $b;
echo "a + b = $result - тип переменной ". gettype($result). "<br>";
$result = $a + $b + $c + $d;
echo "a + b + c + d = $result - тип переменной ". gettype($result) . "<br>";
$result = $b * $c + $a * $d;
echo "b * c + a * d = $result - тип переменной ". gettype($result) . "<br>";
$result = $a / $b;
echo "a / b = $result - тип переменной ". gettype($result) . "<br>";
$result = $b % $a;
echo "b % a = $result - тип переменной ". gettype($result) . "<br>";
?>