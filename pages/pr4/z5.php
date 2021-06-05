<?php
echo '<p class="red">Нечетные числа от 1 до 10:</p>';

$number = 1;
$mult = 1;

do {
    $mult *= $number;
    echo "$number ";
    $number += 2;
} while ($number <= 10);

echo '<p>Произведение = ' . $mult . '</p>';
?>