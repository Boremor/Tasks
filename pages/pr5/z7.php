<?php
$array = [1, -2, -10, 0, 5, 3, 4, 7, -12, -5];
$min = $array[0];
$max = $array[0];

echo '<p><b>Исходный массив:</b></p>';
foreach ($array as $k => $v) {
    echo "$k = $v, ";
}

echo '<p><b>Массив после удаления четных элементов:</b></p>';

foreach ($array as $k => $v) {
    if ($v % 2 == 0) {
        unset($array[$k]);
        continue;
    }
    echo "$k = $v, ";
}

echo '<p><b>Массив после индексации:</b></p>';
$array = array_values($array);
foreach ($array as $k => $v) {
    echo "$k = $v, ";
}
?>