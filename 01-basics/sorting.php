<?php

    $products = [
        "Наушники" => 5000,
        "Клавиатура" => 3000,
        "Мышь" => 1500,
        "Монитор" => 25000,
        "Микрофон" => 4000
    ];

    //asort()
    $productsByPrice = $products; //копия массива
    asort($productsByPrice); //сортировка массива от дешёвых к дорогим

    foreach ($productsByPrice as $productName => $price){
        echo "$productName - $price\n";
    }

    echo "----------------------------------------\n";

    //arsort()
    $productsByPriceDesc = $products; //копия массива
    arsort($productsByPriceDesc); //сортировка массива от дорогих к дешёвым


    foreach ($productsByPriceDesc as $productName => $price){
        echo "$productName - $price\n";
    }

    echo "----------------------------------------\n";

    //ksort()
    $productsByName = $products; //копия массива
    ksort($productsByName); //сортировка массива по названиям товара в алфавитном порядке

    foreach ($productsByName as $productName => $price){
        echo "$productName - $price\n";
    }

    echo "----------------------------------------\n";

    //sort()
    $numbers = [5000, 1500, 4000, 3000, 25000]; //индексный массив
    foreach ($numbers as $numb){
        echo "Индексный массив до сортировки: $numb\n";
    }
  
    sort($numbers); // сортировка массива по величине
    foreach ($numbers as $numb){
        echo "Индексный массив после сортировки: $numb\n";
    }

?>