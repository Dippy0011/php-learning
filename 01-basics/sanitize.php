<?php

$escape = static fn(string $value): string => htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$sanitizeName = strip_tags($name);
$sanitizeEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title>Sanitization</title>
        <link rel="stylesheet"/>
    </head>
    <body>
        <form action="sanitize.php" method="post">
            <?php if ($name !== ''): ?>
                <p>Исходное имя: <?= $escape($name) ?></p>
                <p>Обработанное имя: <?= $escape($sanitizeName) ?></p>
            <?php endif; ?>
            <?php if ($email !== ''): ?>
                <p>Исходный email: <?= $escape($email) ?></p>
                <p>Обработанный email: <?= $escape($sanitizeEmail) ?></p>
            <?php endif; ?>
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" value="<?= $escape($name) ?>" required />
            <br />
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="<?= $escape($email) ?>" required />
            <br />
            <input type="submit" value="Отправить" />
        </form>
    </body>
</html>