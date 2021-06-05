<?php
$array = [1, -2, -10, 0, 5, 3, 4, 7, -12, -5];
$min = $array[0];
$max = $array[0];

echo '<p><b>Исходный массив:</b></p>';
foreach ($array as $v => $k) {
    echo "$k ";
}

echo '<p><b>Первый найденный отрицательный элемент:</b></p>';

foreach ($array as $v => $k) {
    if ($max < $k) {
        $max = $k;
    }

    if ($min > $k) {
        $min = $k;
    }
}
echo '<p>Максимальный эллемент = ' . $max . '</p>';
echo '<p>Минимальный эллемент = ' . $min . '</p>';
?>