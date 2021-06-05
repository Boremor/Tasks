
<?php
echo '<h2 id="red">Системная информация:</h2>';
echo 'Версия PHP: ' . PHP_VERSION . '<br>';
echo 'Операционная система: ' . PHP_OS . '<br>';
echo 'URL-адресс файла: ' . __DIR__ . '/' . __FILE__ . '<br>';
?>
<style>
    h2#red {
        color: red;
    }
</style>
