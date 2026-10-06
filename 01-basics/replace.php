<?php

    $str = 'PHP — язык программирования';
    $str = str_replace('PHP', 'Python', $str);

    echo "\n {$str}";

    $str2 = 'PHP PHP PHP';
    $str2 = str_replace('PHP', 'Developer', $str2);

    echo "\n {$str2}";

    $str3 = 'PHP php Php pHp';
    $str3 = str_replace('PHP', 'Developer', $str3);

    echo "\n {$str3}";

    $str4 = 'PHP — лучший язык для PHP-разработчика';
    $str4 = str_replace('PHP', '', $str4);

    echo "\n {$str4}";

?>