<?php

    require_once('EncapsulatedProduct.php'); 

    $product = new EncapsulatedProduct;

    $product->productName = "Наушники";
    if (!$product->setPrice(-5000)) {
        exit;
    }
    $product->quantity = 2;
   
    echo "Товар: ", $product->productName, "\n Цена: ", $product->getPrice(), "\n Количество: ", $product->quantity, "\n";
?>