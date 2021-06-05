<?php
echo '<div class="red func"><p>Значение переменной:</p><p>Значение функции:</p></div>';
$y = 0;
for ($i = -2; $i <= 2; $i += 0.5) {
    $y = -2.4 * pow($i, 2) + sin($i) - 3;
    $y = round($y, 2);
    echo '<div class="func"><p>При x = ' . $i . ',</p><p>y = ' . $y . '</p></div><br>';
}
?>