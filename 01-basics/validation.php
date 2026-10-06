<?php

$escape = static fn(string $value): string => htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$isPost = ($_SERVER['REQUEST_METHOD'] ?? '') === 'POST';
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$age = trim($_POST['age'] ?? '');
$url = trim($_POST['url'] ?? '');

$nameIsValid = $name !== '' && filter_var($name, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/^[A-Za-zА-Яа-яЁё ]+$/u']]) !== false;
$emailIsValid = $email !== '' && filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
$ageIsValid = $age !== '' && filter_var($age, FILTER_VALIDATE_INT, ['options' => ['min_range' => 18, 'max_range' => 100]]) !== false;
$urlIsValid = $url === '' || filter_var($url, FILTER_VALIDATE_URL) !== false;

$formIsValid = $nameIsValid && $emailIsValid && $ageIsValid && $urlIsValid;
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title>Валидация</title>
        <link rel="stylesheet"/>
    </head>
    <body>
        <form action="validation.php" method="post">
            <?php if ($isPost && ($name === '' || $email === '' || $age === '')): ?>
                <p>Все поля формы должны быть заполнены.</p>
            <?php endif; ?>
            <?php if ($isPost && $email !== '' && !$emailIsValid): ?>
                <p>Некорректный формат email.</p>
            <?php endif; ?>
            <?php if ($isPost && $age !== '' && !$ageIsValid): ?>
                <p>Возраст должен быть числом от 18 до 100.</p>
            <?php endif; ?>
            <?php if ($isPost && $name !== '' && !$nameIsValid): ?>
                <p>Имя содержит недопустимые символы.</p>
            <?php endif; ?>
            <?php if ($isPost && $url !== '' && !$urlIsValid): ?>
                <p>Некорректный формат URL.</p>
            <?php endif; ?>
            <?php if ($isPost && $formIsValid): ?>
                <p>Форма успешно отправлена!</p>
                <p>Имя: <?= $escape($name) ?></p>
                <p>Email: <?= $escape($email) ?></p>
                <p>Возраст: <?= $escape($age) ?></p>
                <p>URL: <?= $escape($url) ?></p>
            <?php endif; ?>
            

            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" value="<?= $escape($name) ?>" required />
            <br />
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= $escape($email) ?>" required />
            <br />
            <label for="age">Возраст:</label>
            <input type="number" name="age" id="age" min="18" max="100" value="<?= $escape($age) ?>" required />
            <br />
            <label for="url">URL:</label>
            <input type="url" name="url" id="url" value="<?= $escape($url) ?>" />
            <input type="submit" value="Отправить" />
        </form>
    </body>
</html>