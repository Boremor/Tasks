<?php
$admin_email = 'admin@mail.ru';
if (!empty($_POST)):
    $data = $_POST;
    if ($data['name'] == "" || $data['surname'] == "" || $data['patronymic'] == "" || $data['email'] == "" || $data['message'] == ""):
        ?>

        <p>Заполнены не все поля формы!</p>
        <a href="/tasks/pr6/z2.html">Перейти к форме</a>

    <?php
    else:
        $theme = "{$data['surname']} {$data['name']} {$data['patronymic']} {$data['email']}";
        mail($admin_email, $theme, $data['message']);
        ?>

        <p>Ваш вопрос отправлен администратору!</p>
        <a href="/tasks/pr6/z2.html">Назад</a>

    <?php
    endif;
else:
    ?>

    <p>Вы вызвали выполнение скрипта не понажатию кнопки!</p>
    <a href="/tasks/pr6/z2.html">Перейти к форме</a>

<?php endif; ?>
