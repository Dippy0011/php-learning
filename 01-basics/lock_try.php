<?php

    $file = fopen(__DIR__ . "/lock.txt", "r+");

    if (flock($file, LOCK_EX | LOCK_NB)) {
        echo "Блокировка получена." . PHP_EOL;
    } else {
        echo "Файл уже заблокирован." . PHP_EOL;
    }

?>