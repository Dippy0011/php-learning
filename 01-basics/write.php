<?php

    $text = fopen( __DIR__ . "/test.txt", "w") or die("Unable to open file!");
    fwrite($text, "Первая строка" . PHP_EOL . "Вторая строка" . PHP_EOL . "Третья строка");
    fclose($text);

    $text = fopen( __DIR__ . "/test.txt", "r") or die("Unable to open file!");
    while ($file = fgets($text)) {
        echo $file . "<br>";
    }
    fclose($text);

    $text = fopen( __DIR__ . "/test.txt", "r") or die("Unable to open file!");
    echo PHP_EOL . "Позиция указателя: " . ftell($text);
    fread($text, 5);
    echo PHP_EOL . "Позиция указателя после чтения: " . ftell($text);
    fseek($text, 0);
    echo PHP_EOL . "Позиция указателя после перемещения: " . ftell($text);
    fclose($text);

    $text = fopen( __DIR__ . "/test.txt", "w") or die("Unable to open file!");
    fwrite($text, "ABCDEFGHIJ");
    fclose($text);

    $text = fopen( __DIR__ . "/test.txt", "r+") or die("Unable to open file!");
    echo PHP_EOL . "Позиция указателя: " . ftell($text);
    fseek($text, 5);
    fwrite($text, "XYZ");
    fseek($text, 0);
    echo PHP_EOL . fgets($text);
    fclose($text);

    $text = fopen( __DIR__ . "/test.txt", "w") or die("Unable to open file!");
    fwrite($text, "ABCDEFGHIJ");
    fclose($text);

    $text = fopen( __DIR__ . "/test.txt", "r+") or die("Unable to open file!");
    ftruncate($text, 5);
    fseek($text, 0);
    echo PHP_EOL . fgets($text);
    fclose($text);

    $text = fopen( __DIR__ . "/users.csv", "r") or die("Unable to open file!");
    while ($file = fgetcsv($text, null, ",", '"', "\\")) {
        //echo PHP_EOL . "ID: " . $file[0] . ", Имя: " . $file[1] . ", Возраст: " . $file[2];
        print_r($file);
    }
    fclose($text);

    $text = file(__DIR__ . "/text.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    print_r($text);

    $text = file_get_contents(__DIR__ . "/text.txt");
    print_r($text);

    file_put_contents(__DIR__ . "/text.txt", "Первая строка" . PHP_EOL . "Вторая строка" . PHP_EOL . "Третья строка");
    $text = file_get_contents(__DIR__ . "/text.txt");
    print_r(PHP_EOL . $text);
?>