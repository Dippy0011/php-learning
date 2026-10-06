<?php

    $str = 'PHP Programming';
    $lastSymbol = mb_strlen($str) - 1;
    $length = mb_strlen($str);
    
    echo "\n $str[0]";
    echo "\n $str[$lastSymbol]";
    echo "\n $str[4]";
    echo "\n $length";

    $hello = 'Hello';
    $hello[1] = 'a';

    echo "\n $hello";

    $str = 'Ruslan PHP Developer';
    $lastSymbol = mb_strlen($str) - 1;

    echo "\n {$str}";
    echo "\n " . $str[0];
    echo "\n $str[$lastSymbol]";
    $str[7] = 'p';
    echo "\n {$str}";

?>