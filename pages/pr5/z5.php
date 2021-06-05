<?php
echo '<p><b>Исходный массив:</b></p>';
$array = [1, -2, -10, 0, 5, 3, 4, 7, 12, -5];
foreach ($array as $v => $k) {
    echo "$k ";
}

echo '<p><b>Первый найденный отрицательный элемент:</b></p>';

foreach ($array as $v => $k) {
    if ($k < 0) {
        echo "Индекс $v элемент $k ";
        break;
    }
}

?>