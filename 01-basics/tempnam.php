<?php

    $a = tempnam(__DIR__, "test_");
    echo "\n Путь к временному файлу: {$a}";
    file_exists($a) ? print("\n Файл существует") : print("\n Файл не существует");
    unlink($a);
    file_exists($a) ? print("\n Файл существует") : print("\n Файл не существует");


?>