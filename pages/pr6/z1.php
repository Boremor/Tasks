<?php
if (!empty($_POST)){
    $data = $_POST;
}
?>
<h1>Привет! <?= $data['name']?></h1>

<p><?= $data['name'] ?>, Вами были внесены следующие данные:</p>
<table>
    <tr>
        <td>Фаилия</td>
        <td><?= $data['surname'] ?></td>
    </tr>
    <tr>
        <td>Имя</td>
        <td><?= $data['name'] ?></td>
    </tr>
    <tr>
        <td>Отчество</td>
        <td><?= $data['patronymic'] ?></td>
    </tr>
    <tr>
        <td>Пол</td>
        <td><?= $data['gender'] ?></td>
    </tr>
    <tr>
        <td>Возраст</td>
        <td><?= $data['age'] ?></td>
    </tr>
</table>
<p>Языки:</p>
<?php if (!empty($data['language'])): ?>
    <table>
        <?php foreach ($data['language'] as $v): ?>
            <tr>
                <td><?= $v ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p><b>Нет!</b></p>
<?php endif; ?>
<p>Образование:</p>
<?php if (!empty($data['education'])): ?>
    <table>
        <?php foreach ($data['education'] as $k => $v): ?>
            <tr>
                <td><?= $v ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p><b>Нет!</b></p>
<?php endif; ?>
<p>Страна проживания:</p>
<table>
    <tr>
        <td><?= $data['country'] ?></td>
    </tr>
</table>
<p>Кратко о себе:</p>
<table>
    <tr><td><?= $data['about'] ?></td></tr>
</table>