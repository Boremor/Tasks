<?php
echo '<p class="red">Двухзначные нечетные числа:</p>';
$number = 10;
$count = 0;
$sum = 0;

while ($number < 100):
    if ($number % 2 != 0) {
        echo "$number ";
        $count++;
        $sum += $number;
    }
    $number++;
endwhile;

echo '<p class="red">Количество чисел = ' . $count . '</p>';
echo '<p class="red">Сумма чисел = ' . $sum . '</p>';
?>