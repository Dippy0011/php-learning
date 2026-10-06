<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (($_POST['forget'] ?? '') === 'myAction') {
            $_SESSION = [];
            session_destroy();
        } else {
            $_SESSION['name'] = trim($_POST['name'] ?? '');
            $_SESSION['age'] = trim($_POST['age'] ?? '');
            $_SESSION['city'] = trim($_POST['city'] ?? '');
        }
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
        <?php if (isset($_SESSION['name']) || isset($_SESSION['age']) || isset($_SESSION['city'])): ?>
            <p>Имя: <?= htmlspecialchars($_SESSION['name'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></p>
            <p>Возраст: <?= htmlspecialchars($_SESSION['age'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></p>
            <p>Город: <?= htmlspecialchars($_SESSION['city'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></p>
        <?php endif; ?>
        <form action="session.php" method="post">
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" required pattern="[A-Za-zА-Яа-яЁё ]+" title="Используйте только буквы и пробелы" />
            <label for="age">Возраст:</label>
            <input type="text" id="age" name="age" required inputmode="numeric" pattern="[0-9]+" title="Используйте только цифры" />
            <label for="city">Город:</label>
            <input type="text" id="city" name="city" required pattern="[A-Za-zА-Яа-яЁё ]+" title="Используйте только буквы и пробелы" />

            <input type="submit" value="Отправить" />
            <button type="submit" value="myAction" name="forget" formnovalidate>Очистить информацию</button>
        </form>
    </body>
</html>