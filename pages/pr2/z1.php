<?php
echo '<h1>Удвоение меньшего значения:</h1><hr>';

$a = 10;
$b = 72;

echo "<p>a = $a</p>";
echo "<p>b = $b</p>";
echo '<hr>';

if ($a < $b) {
    echo '<p><b>a < b </b></p>';
    $a *= 2;
    echo "<p><b>Удвоенное значение a = $a</b></p>";
} else if ($b < $a) {
    echo '<p><b>b < a </strong></p>';
    $b *= 2;
    echo "<p><b>Удвоенное значение b = $b</b></p>";
} else
    echo '<p><b>a и b равны</b></p>';
?>
