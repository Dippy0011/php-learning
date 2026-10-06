<?php

    $loc = setlocale(LC_ALL, 'ru.UTF-8', 'ru_RU.UTF-8', 'rus.UTF-8', 'russian.UTF-8');
    echo "\n $loc";

    $loc2 = setlocale(LC_MONETARY, 'ru.UTF-8', 'ru_RU.UTF-8', 'rus.UTF-8', 'russian.UTF-8');
    echo "\n $loc2";

    print_r(localeconv());
?>