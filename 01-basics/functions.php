<?php

    $product_price = 1500;
    $quantity = 3;
    $discount = 0.1; # 10% скидка

    echo "Цена товара: $product_price" . PHP_EOL;
    echo "Количество: $quantity" . PHP_EOL;
    echo "Скидка: 10%" . PHP_EOL;

    $result = calculateTotal($product_price, $quantity, $discount);
    echo "Итоговая сумма: $result" . PHP_EOL;

    $result = calculateTotal($product_price, $quantity);
    echo "Итоговая сумма без скидки: $result" . PHP_EOL;

    function calculateTotal(float $product_price, int $quantity, float $discount = 0): float {
        $price_without_discount = $product_price * $quantity;
        $discount_amount = $price_without_discount * $discount;
        $total = $price_without_discount - $discount_amount;

        return $total;
    }
?>