<?php

    $product_price = 1500;
    $quantity = 3;
    $discount = 0.1; # 10% скидка

    echo "Цена товара: $product_price" . PHP_EOL;
    echo "Количество: $quantity" . PHP_EOL;
    echo "Скидка: 10%" . PHP_EOL;

    #первый способ расчета стоимости с учетом скидки

    //echo "Стоимость без скидки: " . ($product_price * $quantity) . PHP_EOL;
    //echo "Скидка: " . ($product_price * $quantity * $discount) . PHP_EOL;
    //echo "Итого: " . ($product_price * $quantity - ($product_price * $quantity * $discount)) . PHP_EOL;

    #Второй способ расчета стоимости с учетом скидки

    //$price_without_discount = $product_price * $quantity;
    //$discount_amount = $price_without_discount * $discount;
    //$total = $price_without_discount - $discount_amount;

    //echo "Стоимость без скидки: $price_without_discount" . PHP_EOL;
    //echo "Скидка: $discount_amount" . PHP_EOL; 
    //echo "Итого: $total" . PHP_EOL;

    #Третий способ расчета стоимости с учетом скидки

    $product_price = $product_price * $quantity;
    $discount = $product_price * $discount;
    $total = $product_price - $discount;

    echo "Стоимость без скидки: $product_price" . PHP_EOL;
    echo "Скидка: $discount" . PHP_EOL;
    echo "Итого: $total" . PHP_EOL;
?>