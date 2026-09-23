<?php

    require_once('ConstructorProduct.php'); 

    $product1 = new ConstructorProduct("Наушники", 5000, 2);
    $product2 = new ConstructorProduct("Клавиатура", 3000, 1);
    $product3 = new ConstructorProduct("Монитор", 25000, 1);

    echo "Товар: ", $product1->productName, "\n Цена: ", $product1->getPrice(), "\n Количество: ", $product1->quantity, "\n";
    echo "---------------------------------------------------\n";
    echo "Товар: ", $product2->productName, "\n Цена: ", $product2->getPrice(), "\n Количество: ", $product2->quantity, "\n";
    echo "---------------------------------------------------\n";
    echo "Товар: ", $product3->productName, "\n Цена: ", $product3->getPrice(), "\n Количество: ", $product3->quantity, "\n";
    echo "---------------------------------------------------\n";
    
    $product1->quantity = 5;
    echo "Товар: ", $product1->productName, "\n Цена: ", $product1->getPrice(), "\n Количество: ", $product1->quantity, "\n";
?>