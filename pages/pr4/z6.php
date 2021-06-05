<?php
echo '<p class="red">Числа от -5 до 10:</p>';

$number = -5;
$sum = 0;
$minus_sum = 0;

do {
    echo "$number ";
    if ($number < 0)
        $minus_sum += $number;
    else
        $sum += $number;
    $number++;
} while ($number <= 10);

echo '<p>Сумма отрицательных чисел = ' . $minus_sum . '</p>';
echo '<p>Сумма положительных чисел = ' . $sum . '</p>';
?>