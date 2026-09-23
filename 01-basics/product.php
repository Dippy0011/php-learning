<?php

    function getProductInfo(string $productName, float $price, int $quantity = 1, float $discount = 0,): string {
        $priceWithoutDiscount = $price * $quantity;
        $discountAmount = $priceWithoutDiscount * $discount;
        $totalPrice = $priceWithoutDiscount - $discountAmount;

        $totalDescription = "Товар: $productName\n- Цена: $price\n- Количество: $quantity\n- Скидка: " . ($discount * 100) . " %\n- Стоимость без скидки: $priceWithoutDiscount\n- Скидка: $discountAmount\n- Итого: $totalPrice\n";

        return $totalDescription;
    }

    $productName = "Наушники";
    $price = 5000;
    $quantity = 2;
    $discount = 0.1;

    $total = getProductInfo($productName, $price, $quantity, $discount);
    echo $total;

    $productName = "Клавиатура";
    $price = 3000;

    $total = getProductInfo($productName, $price,);
    echo $total;

    $productName = "Мышь";
    $price = 1500;
    $quantity = 3;
    $discount = 0.2;

    $total = getProductInfo(productName: $productName, price: $price, quantity: $quantity, discount: $discount);
    echo $total;
?>