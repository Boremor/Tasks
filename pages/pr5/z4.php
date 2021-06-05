<?php
echo '<p><b>Исходный массив:</b></p>';

$array = [-5, 546, 5, 2, 4, 10, 12, -52];
foreach ($array as $v => $k) {
    echo "$v элемент $k <br>";
}

echo '<p><b>Индексы искомых эллементов:</b></p>';

foreach ($array as $v => $k) {
    if (0 < $k && $k < 10) {
        echo "$v ";
    }
}

?>