<?php

$escape = static fn(string $value): string => htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

$name = trim($_POST['name'] ?? '');
$age = trim($_POST['age'] ?? '');
$email = trim($_POST['email'] ?? '');
$id = trim($_POST['id'] ?? '');

$data = [
    'name' => $name,
    'age' => $age,
    'email' => $email,
    'id' => $id,
];

$definitions = [
    'name' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'options' => ['regexp' => '/^[A-Za-zА-Яа-яЁё ]+$/u'],
    ],
    'age' => [
        'filter' => FILTER_VALIDATE_INT,
        'options' => ['min_range' => 18, 'max_range' => 100, 'default' => 18],
    ],
    'email' => [
        'filter' => FILTER_VALIDATE_EMAIL,
    ],
    'id' => [
        'filter' => FILTER_VALIDATE_INT,
        'options' => ['min_range' => 1, 'max_range' => 100000, 'default' => 1],
    ],
];

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title>filters</title>
        <link rel="stylesheet"/>
    </head>
    <body>
        <form action="filter_array.php" method="post">
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                <?php $filteredData = filter_var_array($data, $definitions); ?>
                <?php foreach ($filteredData as $key => $value): ?>
                    <?php if ($value === false): ?>
                        <p>Некорректное значение для поля <?= $escape($key) ?>.</p>
                    <?php else: ?>
                        <p><?= $escape($key) ?>: <?= $escape((string)$value) ?></p>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" value="<?= $escape($name) ?>" required />
            <br />
            <label for="age">Возраст:</label>
            <input type="number" name="age" id="age" value="<?= $escape($age) ?>" required />
            <br />
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= $escape($email) ?>" required />
            <br />
            <label for="id">ID Пользователя:</label>
            <input type="number" name="id" id="id" value="<?= $escape($id) ?>" required />
            <br />
            <input type="submit" value="Отправить" />
        </form>
    </body>
</html>