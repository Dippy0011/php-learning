<?php

    $ini1 = parse_ini_file('config.ini', false, INI_SCANNER_TYPED);
    // INI_SCANNER_TYPED - возвращает значения в виде их типов (int, float, bool, string)
    $ini2 = parse_ini_file('config.ini', false, INI_SCANNER_NORMAL);
    // INI _ SCANNER _ NORМAL - нормализация содержимого INI-файла. Строки yes, true, on
    // будут интерпретироваться как логическое true. Значение О, пустая строка, false,
    // off, no, none рассматриваются как false;
    $ini3 = parse_ini_file('config.ini', false, INI_SCANNER_RAW);
    // INI_SCANNER_RAW - все типы передаются как есть, без нормализации
    $ini4 = parse_ini_file('config.ini', true);
    // Если аргумент имеет значение false, то все секции в файле игнорируются и возвращается просто массив ключей и значений.
    // Если же он равен true, функция вернет двумерный массив.

    print_r($ini1);
    print_r($ini2);
    print_r($ini3);
    print_r($ini4);

    var_dump($ini1['active']);
    var_dump($ini1['empty']);
    var_dump($ini1['number']);

    var_dump($ini2['active']);
    var_dump($ini2['empty']);
    var_dump($ini2['number']);

    var_dump($ini3['active']);
    var_dump($ini3['empty']);
    var_dump($ini3['number']);

    var_dump($ini4['database']['active']);
    var_dump($ini4['database']['empty']);
    var_dump($ini4['database']['number']);
?>