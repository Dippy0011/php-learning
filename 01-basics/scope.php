<?php

    function showAppName() {
        global $appName;
        echo $appName . "\n";
    }

    function showUser(string $name, int $age) {
        $txtResult = "Пользователь $name, Возраст: $age\n";

        return $txtResult;
    }

    function increment() {
        static $count = 0; 
        $count++;
        return $count;
    }


    function calculateOrderTotal(float $price, int $quantity = 1, float $discount = 0): float {
        $total = ($price * $quantity) - ($price * $quantity * $discount);
        
        return $total;
    }

    $count = 0;

    $appName = "PHP Learning";
    $name = "Руслан";
    $age = 30;

    $price = 5000;
    $quantity = 2;
    $discount = 0.1;

    showAppName(); // выводит "PHP Learning"

    echo showUser($name, $age); // выводит "Пользователь Руслан, Возраст: 30"

    $name = "Анна";
    $age = 25;

    echo showUser($name, $age); // выводит "Пользователь Анна, Возраст: 25"

    echo calculateOrderTotal($price, $quantity, $discount) . "\n"; // выводит 9000 (скидка 10%)

    $discount = 0.2;

    echo calculateOrderTotal($price, $quantity, $discount) . "\n"; // выводит 8000 (скидка 20%)
    echo calculateOrderTotal($price, $quantity) . "\n"; // выводит 10000 (без скидки)

    echo increment() . "\n"; // выводит 1
    echo increment() . "\n"; // выводит 2
    echo increment() . "\n"; // выводит 3

?>