<?php

$escape = static fn(string $value): string => htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

function myFilterCallback(string $value): string
{
    $value = strip_tags($value);
    return trim($value);
}

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title>Filter Callback</title>
        <link rel="stylesheet"/>
    </head>
    <body>
        <form action="filter_callback.php" method="post">
            <?php if (isset($_POST['txt'])): ?>
                <p>Отфильтрованный текст: <?= $escape(filter_var($_POST['txt'], FILTER_CALLBACK, ['options' => 'myFilterCallback'])) ?></p>
            <?php endif; ?>
            <label for="txt">Текст:</label>
            <input type="text" name="txt" id="txt" value="<?= $escape($_POST['txt'] ?? '') ?>" required />
            <br />
            <input type="submit" value="Отправить" />
        </form>
    </body>
</html>



