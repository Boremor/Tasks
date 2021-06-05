<?php
echo '<p><b>Исходный массив:</b></p>';
define('NUM', 10);
$array = [7, 45, 678, 10, 58, 4, 31, 8, 10];
$more = 0;
$less = 0;
$equally = 0;
$lenght = count($array);

foreach ($array as $v) {
    echo "$v ";
    if ($v > NUM)
        $more++;
    else if ($v < NUM)
        $less++;
    else
        $equally++;
}
echo '<p>Длинна массива = ' . $lenght . '</p>';
echo '<p>Количество больших = ' . $more . '</p>';
echo '<p>Количество меньших = ' . $less . '</p>';
echo '<p>Количество равных = ' . $equally . '</p>';
?>