<?php

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') { 
        exit('Отправьте форму со страницы form.html.');
    }

    $name = trim($_POST['name'] ?? '');
    $age = trim($_POST['age'] ?? '');
    $city = trim($_POST['city'] ?? '');
    $phpProficiencyLevel = $_POST['phpProficiencyLevel'] ?? '';
    $whatADeveloperStudies = $_POST['whatADeveloperStudies'] ?? [];

    if ($name === '' || $age === '' || $city === '' || $phpProficiencyLevel === '' || empty($whatADeveloperStudies)) {
        exit('Заполните все поля формы.');
    }

    if ($age < 18) {
        $adult = 'несовершеннолетний';
    } else {
        $adult = 'совершеннолетний';
    }

    $escape = static fn(string $value): string => htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title>Профиль разработчика</title>
        <link rel="stylesheet" href="form.css" />
    </head>
    <body>
        <h1>Профиль разработчика</h1>
        <p>Привет, <?= $escape($name) ?>!</p>
        <p>Возраст: <?= $escape($age) ?> лет.</p>
        <p> <?= $escape($adult) ?>.</p>
        <p>Город: <?= $escape($city) ?></p>
        <p>Уровень: <?= $escape($phpProficiencyLevel) ?></p>
        <p>Изучает:<br> <?= implode('<br> ', array_map($escape, $whatADeveloperStudies)) ?></p>

    </body>
</html>