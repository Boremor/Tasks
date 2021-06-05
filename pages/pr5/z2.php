<?php
echo '<p><b>Исходный массив:</b></p>';
$array = [-5, -45, -52, -4, 156, 549, 651, 5846, -45];


foreach ($array as $v) {
    echo "$v ";
}

echo '<p><b>Полученный массив массив:</b></p>';

foreach ($array as $v) {
    if ($v < 0)
        $v = pow($v, 2);
    echo "$v ";
}
?>