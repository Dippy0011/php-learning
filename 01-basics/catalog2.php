<?php

    $products1 = [
        "Наушники" => 5000,
        "Клавиатура" => 3000,
        "Мышь" => 1500
    ];

    $products2 = [
        "Монитор" => 25000,
        "Микрофон" => 4000,
        "Камера" => 7000
    ];

    //объединение двух массивов в один и вывод результата
    $allProducts = array_merge($products1, $products2);
    foreach ($allProducts as $productName => $price) {
        echo "$productName — $price\n";
    }

    echo "----------------------------------------\n";

    //делим массив чтобы осталась только часть из $products1
    $allProducts = array_slice($allProducts, 0, 3);
    print_r($allProducts) . "\n";

    echo "----------------------------------------\n";

    //существуют ли элименты в массиве
    if (isset($allProducts['Наушники'])) {
        echo "Наушники существуют\n";
    } else {
        echo "Наушники не существуют\n";
    }

    if (isset($allProducts['Телефон'])) {
        echo "Телефон существует\n";
    } else {
        echo "Телефон не существует\n";
    }

    echo "----------------------------------------\n";

    //сравнение массивов
    $products3 = [
        "Монитор" => 25000,
        "Микрофон" => 4000,
        "Камера" => 7000
    ];

    if ($products2 == $products3) {
        echo "Массивы равны\n";
    } else {
        echo "Массивы не равны\n";
    }

    if ($products2 === $products3) {
        echo "Массивы эквиваленты\n";
    } else {
        echo "Массивы не эквивалентны\n";
    }
?>