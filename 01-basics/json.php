<?php

    $arr = [
        'name' => 'Руслан',
        'age' => 20,
        'profession' => 'PHP Developer',
        'city' => 'Железноводск',
        'salary' => 50000.50,
        'isJunior' => true,
    ];

    $arr1 = json_encode($arr, JSON_UNESCAPED_UNICODE);
    echo "\n {$arr1}";
    $arr3 = json_encode($arr);
    echo "\n {$arr3}";

    $arr2 = json_decode($arr1, true);
    echo "\n ";
    print_r($arr2);
    $arr4 = json_decode($arr1, false);
    echo "\n ";
    print_r($arr4);

    foreach ($arr2 as $value) {
        echo "\n" . gettype($value);
    }
    
    echo "\n ------------------------------------------------------";

    foreach ($arr4 as $value) {
        echo "\n" . gettype($value);
    }

    echo "\n ------------------------------------------------------";

    echo "\n Имя: " . $arr4->name;
    echo "\n Профессия: " . $arr4->profession;
    echo "\n Зарплата: " . $arr4->salary;



?>