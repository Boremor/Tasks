<?php
echo '<h1>Выбор целых чисел:</h1><hr>';

$a = 5;
$b = 1000.8;
$c = "text";
$d = -3;

echo "<p>a = $a</p>";
echo "<p>b = $b</p>";
echo '<hr>';

if (is_integer($a))
    echo "<p class='blue'><b>$a целое число</b></p>";
if (is_integer($b))
    echo "<p class='blue'><b>$b целое число</b></p>";
if (is_integer($c))
    echo "<p class='blue'><b>$c целое число</b></p>";
if (is_integer($d))
    echo "<p class='blue'><b>$d целое число</b></p>";
?>