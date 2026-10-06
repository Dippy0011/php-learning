<?php

    $str = 'PHP — язык программирования';
    $position1 = strpos($str, 'PHP');
    $position2 = strpos($str, 'Python');

    echo "\n " . strpos($str, 'язык');


    if ($position1 !== false) {
        echo "\n " . $position1 . " Найден!";
    } else {
        echo "\n PHP не найден"; 
    }

    if ($position2 !== false) {
        echo "\n " . $position2 . " Найден!";
    } else {
        echo "\n Python не найден"; 
    }

    $str1 = 'PHP PHP php Php';
    $firstPhp = strpos($str1, 'PHP');

    echo "\n " . $firstPhp;
    echo "\n " . strpos($str1, 'PHP', $firstPhp + strlen('PHP'));
    echo "\n " . strpos($str1, 'php');
    echo "\n " . strpos($str1, 'Php');

    $email = 'ruslan@example.com';

    if (strpos($email, '@') !== false) {
        echo "\n Email содержит @";
    } else {
        echo "\n Email не содержит @";
    }

?>