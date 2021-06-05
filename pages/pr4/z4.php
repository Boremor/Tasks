<?php
echo '<p class="red">Вычисление факториала:</p>';
define('N', 5);
$factorial = 1;
$counter = 1;

while ($counter <= N):
    $factorial *= $counter;
    $counter++;
endwhile;

echo '<p>!' . N . ' = ' . $factorial . '</p>';
?>