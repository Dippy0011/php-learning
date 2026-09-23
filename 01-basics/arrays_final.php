<?php

    $productList = [
        'product1' => ['name' => 'Наушники', 'price' => 5000, 'quantity' => 2],
        'product2' => ['name' => 'Клавиатура', 'price' => 2000, 'quantity' => 4],
        'product3' => ['name' => 'Мышь', 'price' => 800, 'quantity' => 10],
        'product4' => ['name' => 'Монитор', 'price' => 25000, 'quantity' => 1],
        'product5' => ['name' => 'Микрофон', 'price' => 2500, 'quantity' => 3]
    ];

    $totalPrice = 0;
    $randKeys = array_rand($productList, 1);
    
    echo "\n ------------------------------------------------------";

    foreach ($productList as $product => $details) {
        echo "\n $product";
        echo "\n    Товар: {$details['name']}";
        echo "\n    Цена: {$details['price']} руб";
        echo "\n    Количество: {$details['quantity']} шт";

        $totalPrice += $details['price'] * $details['quantity'];
    }

    echo "\n ------------------------------------------------------";
    echo "\n Общая стоимость всех товаров: $totalPrice руб";
    echo "\n Всего товаров: " . count($productList);
    echo "\n Всего элементов в массиве: " . count($productList, COUNT_RECURSIVE);
    echo "\n ------------------------------------------------------";

    echo "\n Товары дороже 3000:";
    foreach ($productList as $product => $details) {
        if ($details['price'] > 3000) {
            echo "\n {$details['name']} - {$details['price']} руб";
        }
    }

    echo "\n ------------------------------------------------------";
    if (array_key_exists('price', $productList['product1'])) {
        echo "\n Цена существует!"; 
    } else {
        echo "\n Цены не существует!"; 
    }

    echo "\n ------------------------------------------------------";
    echo "\n Случайный товар: " . $randKeys . " - " . $productList[$randKeys]['name'];
?>