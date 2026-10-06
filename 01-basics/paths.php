<?php

    $fileName =  basename(__FILE__) . PHP_EOL;
    $fileDir = dirname(__FILE__) . PHP_EOL;
    $fileParentDir = dirname(__DIR__) . PHP_EOL;
    
    echo "\n Имя файла: {$fileName}";
    echo "\n Директория файла: {$fileDir}";
    echo "\n Родительская директория: {$fileParentDir}";

?>