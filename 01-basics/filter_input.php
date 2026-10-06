<?php

    $escape = static fn(string $value): string => htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

    $isSubmitted = $_SERVER['REQUEST_METHOD'] === 'POST';

    $definitions = [
        'name' => [
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/^[a-zA-Zа-яА-ЯёЁ\s]+$/u'],
        ],
        'age' => [
            'filter' => FILTER_VALIDATE_INT,
            'options' => ['min_range' => 18, 'max_range' => 100],
        ],
        'email' => [
            'filter' => FILTER_VALIDATE_EMAIL,
        ],
    ];

    $result = filter_input_array(INPUT_POST, $definitions);
    

    $validName = is_string($result['name'] ?? null);
    $validAge = is_int($result['age'] ?? null);
    $validEmail = is_string($result['email'] ?? null);

    $finalName = $validName ? $result['name'] : '';
    $finalAge = $validAge ? (string) $result['age'] : '';
    $finalEmail = $validEmail ? $result['email'] : '';

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title>Filter Input</title>
        <link rel="stylesheet"/>
    </head>
    <body>
        <form action="filter_input.php" method="post">
            <?php if ($isSubmitted && $validName && $validAge && $validEmail): ?>
                <p>Отфильтрованные данные:</p>
                <ul>
                    <li>Имя: <?= $escape($finalName) ?></li>
                    <li>Возраст: <?= $escape($finalAge) ?></li>
                    <li>Email: <?= $escape($finalEmail) ?></li>
                </ul>
            <?php endif; ?>
            <?php if ($isSubmitted): ?>
                <?php if (!$validName): ?>
                    <p>Имя должно содержать только буквы и пробелы.</p>
                <?php endif; ?>
                <?php if (!$validAge): ?>
                    <p>Возраст должен быть числом от 18 до 100.</p>
                <?php endif; ?>
                <?php if (!$validEmail): ?>
                    <p>Введите корректный email.</p>
                <?php endif; ?>
            <?php endif; ?>
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" value="<?= $escape($finalName) ?>" required />
            <br />
            <label for="age">Возраст:</label>
            <input type="number" name="age" id="age" value="<?= $escape($finalAge) ?>" required />
            <br />
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= $escape($finalEmail) ?>" required />
            <br />
            <input type="submit" value="Отправить" />
        </form>
    </body>
</html>
