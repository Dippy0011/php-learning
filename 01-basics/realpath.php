<?php

    $path = realpath(__FILE__);
    $parentPath = realpath(__DIR__);
    $fakePath = realpath('../not-found.txt');

    echo "\n Путь к файлу: {$path}";
    echo "\n Путь к директории: {$parentPath}";
    echo "\n Путь к несуществующему файлу: {$fakePath}";

?>