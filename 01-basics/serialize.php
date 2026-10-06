<?php

    $arr = [
        'name' => 'Руслан',
        'age' => 20,
        'profession' => 'PHP Developer',
        'city' => 'Железноводск',
        'salary' => 50000.50,
        'isJunior' => true,
    ];

    $arr1 = serialize($arr);
    echo "\n $arr1";

    $arr2 = unserialize($arr1);
    echo "\n ";
    print_r($arr2);

    foreach ($arr2 as $key) {
        echo "\n" . gettype($key);
    }

?>