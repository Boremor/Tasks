<?php
$array_1 = [
    "a" => 1,
    "b" => 3,
    "c" => 4,
    "d" => 8
];
$array_2 = [
    "e" => 9,
    "f" => 12,
    "g" => 5,
    "h" => -1
];

echo '<p><b>Исходный массив №1:</b></p>';
print_r($array_1);
echo '<p><b>Исходный массив №2:</b></p>';
print_r($array_2);
echo '<p><b>Массив №3(1 способ):</b></p>';
print_r($array_1 + $array_2);
echo '<p><b>Массив №3(2 способ):</b></p>';
print_r(array_merge($array_1, $array_2));
?>