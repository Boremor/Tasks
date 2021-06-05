<?php
echo '<p class="red">Двухзначные числа:</p>';
$number = 10;
$count = 0;
$sum = 0;

while ($number < 100) {
    echo "$number ";
    $count++;
    $sum += $number;
    $number++;
}

echo '<p class="red">Количество чисел = ' . $count . '</p>';
echo '<p class="red">Сумма чисел = ' . $sum . '</p>';
?>