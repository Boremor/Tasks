<?php
echo '<p><b>Исходный массив:</b></p>';

$array = [-5, -45, -52, -4, 156, 549, 651, 5846, -45];
$sum = 0;


foreach ($array as $v) {
    if ($v > 0)
        $sum += $v;
    echo "$v ";
}

echo '<p><b>Сумма положительных эллементов массива = ' . $sum . '</b></p>';
?>