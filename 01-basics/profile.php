<?php

    $Name = "Ruslan";
    $Age = 20;
    $City = "Moscow";
    $Salary = 50000.00;
    $Junior = true;

    define('APP_NAME', 'PHP Learning');

    echo APP_NAME . PHP_EOL;
    echo PHP_EOL;
    echo $Name . PHP_EOL;
    echo $Age . PHP_EOL;
    echo $City . PHP_EOL;
    echo $Salary . PHP_EOL;
    echo $Junior . PHP_EOL;

    $Result = [
        'Name' => is_string($Name),
        'Age' => is_int($Age),
        'City' => is_string($City),
        'Salary' => is_float($Salary),
        'Junior' => is_bool($Junior)
    ];

    print_r($Result);
?>