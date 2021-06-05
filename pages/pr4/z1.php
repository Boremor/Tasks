<?php
echo '<p class="red">Числа которые без остатка деляться на 7:</p>';
$number = 1;
$count = 0;

while ($number <= 100) {
    if ($number % 7 == 0) {
        echo "$number ";
        $count++;
    }

    $number++;
}

echo '<p class="red">Количество чисел = ' . $count . '</p>';
?>