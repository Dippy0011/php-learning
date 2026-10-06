<?php

$escape = static fn(string $value): string => htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$email = trim($_POST['email'] ?? '');
$int = trim($_POST['int'] ?? '');
$string = trim($_POST['string'] ?? '');

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title>filters</title>
        <link rel="stylesheet"/>
    </head>
    <body>
        <form action="sanitize1.php" method="post">
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                <p>Email: <?= filter_var($email, FILTER_SANITIZE_EMAIL) ?></p>
                <p>Целое число: <?= filter_var($int, FILTER_SANITIZE_NUMBER_INT) ?></p>
                <p>HTML-текст: <?= filter_var($string, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?></p>
            <?php endif; ?>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="<?= $escape($email) ?>" required />
            <br />
            <label for="int">Целое число:</label>
            <input type="text" name="int" id="int" value="<?= $escape($int) ?>" required />
            <br />
            <label for="string">HTML-текст:</label>
            <input type="text" name="string" id="string" value="<?= $escape($string) ?>" required />
            <br />
            <input type="submit" value="Отправить" />
        </form>
    </body>
</html>