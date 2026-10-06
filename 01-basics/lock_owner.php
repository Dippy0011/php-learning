<?php

    $file = fopen(__DIR__ . "/lock.txt", "r+");
    
    if (flock($file, LOCK_EX)) {
        echo "Блокировка получена. Нажмите Ctrl+C для завершения." . PHP_EOL;
    } else {
        echo "Блокировка не получена." . PHP_EOL;
    }

    while (true) {
        sleep(1);
    }

?>