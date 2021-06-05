<?php
echo '<h1>Определение названия недели по ее номеру:</h1><hr>';

$week_number = 10;
echo "Номер недели = $week_number <br>";

switch ($week_number):
    case 1:
        echo 'Понедельник';
        break;
    case 2:
        echo 'Вторник';
        break;
    case 3:
        echo 'Среда';
        break;
    case 4:
        echo 'Четверг';
        break;
    case 5:
        echo 'Пятница';
        break;
    case 6:
        echo 'Суббота';
        break;
    case 7:
        echo 'Воскресенье';
        break;
    default:
        echo 'Нет такой недели!';
        break;
endswitch;
?>