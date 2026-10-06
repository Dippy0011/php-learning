<?php

    $escape = static fn(string $value): string => htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

    $hostName = $_SERVER['HTTP_HOST'] ?? '';
    $serverPort = $_SERVER['SERVER_PORT'] ?? '';
    $scriptPath = $_SERVER['SCRIPT_NAME'] ?? '';
    $clientIp = $_SERVER['REMOTE_ADDR'] ?? '';
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $requestMethod = $_SERVER['REQUEST_METHOD'] ?? '';

?>

<!DOCTYPE html>
<html lang="ru"> 
    <head> 
        <meta charset="utf-8" /> 
        <title>Инфо</title> 
        <link rel="stylesheet"/>
    </head> 
    <body>
            <?php if ($hostName !== ''): ?>
                <p>Имя хоста: <?= $escape($hostName) ?></p>
            <?php endif; ?>
            <?php if ($serverPort !== ''): ?>
                <p>Порт сервера: <?= $escape($serverPort) ?></p>
            <?php endif; ?>
            <?php if ($scriptPath !== ''): ?>
                <p>Путь к скрипту: <?= $escape($scriptPath) ?></p>
            <?php endif; ?>
            <?php if ($clientIp !== ''): ?>
                <p>IP клиента: <?= $escape($clientIp) ?></p>
            <?php endif; ?>
            <?php if ($userAgent !== ''): ?>
                <p>USER AGENT: <?= $escape($userAgent) ?></p>
            <?php endif; ?>
            <?php if ($requestMethod !== ''): ?>
                <p>Метод запроса: <?= $escape($requestMethod) ?></p>
            <?php endif; ?>
    </body>
</html>
