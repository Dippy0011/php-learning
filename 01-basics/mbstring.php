<?php

    $hello = 'Hello World';
    $helloRus = 'Привет мир';

    echo "\n {$hello}";
    echo "\n " . strlen($hello);
    echo "\n " . mb_strlen($hello) . "\n";

    echo "\n {$helloRus}";
    echo "\n " . strlen($helloRus);
    echo "\n " . mb_strlen($helloRus) . "\n";

    $str = 'PHP — лучший язык';

    echo "\n " . mb_substr($str, 0, 3, 'UTF-8');
    echo "\n " . mb_substr($str, 13, 13, 'UTF-8');
    echo "\n " . mb_substr($str, 6, 6, 'UTF-8');

    $info = 'Руслан Багов — PHP Developer';

    echo "\n " . "Имя: " . mb_substr($info, 0, 6, 'UTF-8');
    echo "\n " . "Фамилия: " . mb_substr($info, 7, 6, 'UTF-8');
    echo "\n " . "Профессия: " . mb_substr($info, 15, 27, 'UTF-8');

?>