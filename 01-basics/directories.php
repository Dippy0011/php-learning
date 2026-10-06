<?php

    echo "Каталог файла: " . __DIR__ . PHP_EOL;
    echo "Текущий каталог: " . getcwd() . PHP_EOL;
    chdir(__DIR__ . "/..");
    echo "После chdir: " . getcwd() . PHP_EOL;
    chdir(__DIR__);
    echo "После возврата: " . getcwd() . PHP_EOL;

    $path = __DIR__ . "/test/logs/2026";

    if (is_dir($path)) {
        echo "Каталог уже существует!" . PHP_EOL;
    } else {
        mkdir($path, 0755, true);
        echo is_dir($path);
    }

?>