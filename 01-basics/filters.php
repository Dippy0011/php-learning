<?php

$escape = static fn(string $value): string => htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$isPost = ($_SERVER['REQUEST_METHOD'] ?? '') === 'POST';

$ip = trim($_POST['ip'] ?? '');
$integer = trim($_POST['integer'] ?? '');
$url = trim($_POST['url'] ?? '');

$ipIsValid = $ip !== '' && filter_var($ip, FILTER_VALIDATE_IP, ['options' => ['ipv4' => true, 'ipv6' => true]]) !== false;
$integerIsValid = $integer !== '' && filter_var($integer, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1, 'max_range' => 1000]]) !== false;
$urlIsValid = $url !== '' && filter_var($url, FILTER_VALIDATE_URL) !== false;

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title>filters</title>
        <link rel="stylesheet"/>
    </head>
    <body>
        <form action="filters.php" method="post">

            <?php if ($isPost && ($ip === '' || $integer === '' || $url === '')): ?>
                <p>Все поля формы должны быть заполнены.</p>
            <?php endif; ?>
            <?php if ($isPost && $ip !== '' && !$ipIsValid): ?>
                <p>Некорректный формат IP-адреса.</p>
            <?php endif; ?>
            <?php if ($isPost && $integer !== '' && !$integerIsValid): ?>
                <p>Число должно быть целым от 1 до 1000.</p>
            <?php endif; ?>
            <?php if ($isPost && $url !== '' && !$urlIsValid): ?>
                <p>Некорректный формат URL.</p>
            <?php endif; ?>
            <?php if ($ipIsValid): ?>
                <p>IP-адрес: <?= $escape($ip) ?></p>
            <?php endif; ?>
            <?php if ($integerIsValid): ?>
                <p>Целое число: <?= $escape($integer) ?></p>
            <?php endif; ?>
            <?php if ($urlIsValid): ?>
                <p>URL: <?= $escape($url) ?></p>
            <?php endif; ?>
            <label for="ip">IP-адрес:</label>
            <input type="text" name="ip" id="ip" value="<?= $escape($ip) ?>" required />
            <br />
            <label for="integer">Целое число:</label>
            <input type="number" name="integer" id="integer" value="<?= $escape($integer) ?>" required />
            <br />
            <label for="url">URL:</label>
            <input type="text" name="url" id="url" value="<?= $escape($url) ?>" required />
            <br />
            <input type="submit" value="Отправить" />
        </form>
    </body>
</html>