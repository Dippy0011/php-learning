<?php

    require_once('PrivateProduct.php'); 

    $product = new PrivateProduct;

    $product->productName = "Наушники";
    //$product->price = 5000;
    $product->quantity = 2;

    echo "Товар: ", $product->productName, "\n Количество: ", $product->quantity, "\n";
?>