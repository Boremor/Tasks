<?php
echo '<h1>Проверить, упорядоченны ли числа:</h1><hr>';

$a = 5;
$b = 10;
$c = 15;

echo "<p>a = $a</p>";
echo "<p>b = $b</p>";
echo "<p>c = $c</p>";
echo '<hr>';

if ($a < $b && $b < $c):
    ?>
    <p class="blue"><b>Числа упорядочены</b></p>
<?php
else:
    ?>
    <p><b>Числа не упорядочены</b></p>
<?php
endif;
?>