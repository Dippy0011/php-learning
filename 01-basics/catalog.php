<?php

    $products = [
        "Наушники" => 5000,
        "Клавиатура" => 3000,
        "Мышь" => 1500,
        "Монитор" => 25000
    ];

    //вывод всех элементов массива
    foreach ($products as $productName => $price) {
        if ($price >= 5000) {
            echo "$productName — $price — дорогой товар\n";
        }
        else {
            echo "$productName — $price — доступный товар\n";
        }
    }

?>