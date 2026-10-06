<?php

    $name = '';
    $hello = '';
    $escape = static fn(string $value): string => htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (($_POST['forget'] ?? '') === 'myAction') {
            setcookie('username', '', [
                'expires' => time() - 3600,
                'path' => '/',
                'secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
                'httponly' => true,
                'samesite' => 'Lax',
            ]);

            $hello = 'Имя забыто.';
        } else {
            $name = trim($_POST['name'] ?? '');

            if ($name === '') {
                exit('Заполните поле формы.');
            }

            setcookie('username', $name, [
                'expires' => time() + 30 * 24 * 60 * 60,
                'path' => '/',
                'secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
                'httponly' => true,
                'samesite' => 'Lax',
            ]);

            $hello = 'Здравствуйте, ' . $name;
        }
    } elseif (isset($_COOKIE['username'])) {
        $hello = 'С возвращением, ' . $_COOKIE['username'];
    }
?>

<!DOCTYPE html>
<html lang="ru"> 
    <head>
        <title>Профиль разработчика</title>
        <meta charset="utf-8" /> 
        <link rel="stylesheet" />
    </head>
    <body>

        <?php if ($hello !== ''): ?>
            <p><?= $escape($hello) ?> </p>
        <?php endif; ?>

        <form action="cookie.php" method="post">
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" required pattern="[A-Za-zА-Яа-яЁё ]+" title="Используйте только буквы и пробелы" />

            <input type="submit" value="Отправить" />
            <button type="submit" value="myAction" name="forget" formnovalidate>Забыть имя</button>
        </form>
    </body>
</html>