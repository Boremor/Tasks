<?php
echo '<h1>Проверить, упорядоченны ли числа:</h1><hr>';

$a = 5;
$b = 10;

echo "<p>a = $a</p>";
echo "<p>b = $b</p>";
echo '<hr>';

if ($a < $b):
    ?>
    <p class="blue"><b>Сумма чисел <?= $a ?> + <?= $b ?> = <span><?= $a + $b ?></span></b></p>
<?php
elseif ($a > $b):
    ?>
    <p class="blue"><b>Разность чисел <?= $a ?> - <?= $b ?> = <span><?= $a - $b ?></span></b></p>
<?php
else:
    ?>
    <p class="blue"><b>Произведение чисел <?= $a ?> * <?= $b ?> = <span><?= $a * $b ?></span></b></p>
<?php
endif;
?>