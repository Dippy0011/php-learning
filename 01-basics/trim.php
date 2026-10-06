<?php

    $str = '   PHP Developer   ';

    echo "\n {$str} = " . strlen($str);
    echo "\n " . trim($str) . " = " . strlen(trim($str));

    echo "\n " . ltrim($str) . " = " . strlen(ltrim($str));
    echo "\n " . rtrim($str) . " = " . strlen(rtrim($str));
    echo "\n " . ltrim(rtrim($str)) . " = " . strlen(ltrim(rtrim($str)));

    $fullName = '   Руслан Багов   ';
    $fullNameFinal = trim($fullName);

    echo "\n {$fullName} = " . strlen($fullName);
    echo "\n " . $fullNameFinal . " = " . strlen($fullNameFinal);

    if ($fullNameFinal !== '') {
        echo "\n Строка имени после очистки не пустая";
    } else {
        echo "\n Строка имени после очистки пустая";
    }
?>