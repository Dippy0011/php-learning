<?php

    $appName = 'PHP';
    $orderCost = costCalculation(5000, 3);
    $discountCost = discountCalculation(orderCost: $orderCost, discount: 10);
    $totalPrice = totalPriceCalculation($orderCost, $discountCost);
    $totalPrice2 = totalPriceCalculation($orderCost);
    $multiOrder = [5000, 3000, 800, 25000];

    function costCalculation(float $price, int $quantity): float {
        return $price * $quantity;
    }
    
    function discountCalculation(float $orderCost, int $discount): float {
        return $orderCost * ($discount / 100);
    }

    function totalPriceCalculation(float $orderCost, float $discountCost = 0): float {
        return $orderCost - $discountCost;
    }

    function multiCostCalculation(...$multiOrder): float {
        return array_sum($multiOrder);
    }

    function Message() {
        global $appName;
        echo "\n $appName"; //перед этим надо указать что переменная глобальная
    }

    function staticTest() {
        static $a = 0;
        $b = 1;
        $a += $b;
        echo "\n Функция вызвана: $a раз";
    }

    
    echo "\n Цена товаров: $orderCost";
    echo "\n Скидка: $discountCost";
    echo "\n Финальная цена: $totalPrice";
    echo "\n Финальная цена без указания скидки: $totalPrice2";
    echo "\n Цена мульти товаров: " . multiCostCalculation(...$multiOrder);
    echo "\n ---------------------------------------------------------";

    Message();
    staticTest();
    staticTest();
    staticTest();


?>