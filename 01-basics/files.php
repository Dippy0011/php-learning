<?php

    $text = fopen( __DIR__ . "/test.txt", "r") or die("Unable to open file!");
    $file = fread($text, 10);
    fclose($text);
    echo $file . PHP_EOL;

    $text = fopen( __DIR__ . "/test.txt", "r") or die("Unable to open file!");
    $file = fgets($text);
    fclose($text);
    echo $file . PHP_EOL;

    $text = fopen( __DIR__ . "/test.txt", "r") or die("Unable to open file!");
    while($file = fgets($text)) {
        echo $file . PHP_EOL;
    }
    fclose($text);

    copy(__DIR__ . "/source.txt", __DIR__ . "/copy.txt") or die("Unable to copy file!");
    $text = fopen(__DIR__ . "/copy.txt", "r") or die("Unable to open file!");
    while(($file = fgets($text)) !== false) {
        echo $file . PHP_EOL;
    }
    fclose($text);

    rename(__DIR__ . "/copy.txt", __DIR__ . "/renamed.txt") or die("Unable to rename file!");

    file_exists(__DIR__ . "/copy.txt") ? print("copy.txt exists!") : print("copy.txt does not exist!");
    file_exists(__DIR__ . "/renamed.txt") ? print("renamed.txt exists!") : print("renamed.txt does not exist!");

    
    unlink(__DIR__ . "/renamed.txt") or die("Unable to delete file!");
  

    file_exists(__DIR__ . "/renamed.txt") ? print("renamed.txt exists!") : print("renamed.txt does not exist!");