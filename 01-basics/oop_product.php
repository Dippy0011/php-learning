<?php

    require_once('ProductClass.php'); 

    $product1 = new Product();

    $product1->productName = "Наушники";
    $product1->price = 5000;
    $product1->quantity = 2;

    echo "Товар: ", $product1->productName, "\n Цена: ", $product1->price, "\n Количество: ", $product1->quantity, "\n";

    $product1->quantity++;
    echo "Количество после изменений: ", $product1->quantity, "\n";

    echo "----------------------------------------------\n";

    $product2 = new Product();

    $product2->productName = "Клавиатура";
    $product2->price = 3000;
    $product2->quantity = 1;

    echo "Товар: ", $product2->productName, "\n Цена: ", $product2->price, "\n Количество: ", $product2->quantity, "\n";

    $product2->quantity--;
    echo "Количество после изменений: ", $product2->quantity, "\n";
?>