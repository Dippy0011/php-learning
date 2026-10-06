<?php

    $name = 'Руслан';
    $age = 20;
    $salary = 50000;

    echo "\n ---------------------------------------------\n";

    printf('Имя: %s<br>Возраст: %d<br>Зарплата: %d', $name, $age, $salary);
    printf('<br>Зарплата: %d<br>', $salary);

    echo "\n ---------------------------------------------\n";

    $productPrice = 5000.50;
    $quantity = 3;
    $totalCost = $productPrice * $quantity;

    printf('Цена товара: %.2f руб. <br>Количество: %d шт. <br>Общая стоимость: %.2f руб.', $productPrice, $quantity, $totalCost);

    echo "\n ---------------------------------------------\n";

    $product1 = 'Наушники';
    $productPrice1 = 3499.90;
    $quantity1 = 2;
    $discount1 = 15;
    $totalCost1 = $productPrice1 * $quantity1;
    $discountPrice1 = $totalCost1 * ($discount1 / 100);
    $finalPrice1 = $totalCost1 - $discountPrice1;

    printf('Товар: %s<br>Цена: %.2f руб.<br>Количество: %d шт.<br>Скидка: %d %%<br>Итого: %.2f руб.', $product1, $productPrice1, $quantity1, $discount1, $finalPrice1);

    echo "\n ---------------------------------------------\n";

    $product = 'Наушники';
    $price = 3499.90;
    $product2 = 'Клавиатура';
    $price2 = 2599.00;
    $product3 = 'Мышь';
    $price3 = 899.50;

    printf('%15s %10.2f руб.<br>%15s %10.2f руб.<br>%15s %10.2f руб.', $product, $price, $product2, $price2, $product3, $price3);
    printf('%-15s %10.2f руб.<br>%-15s %10.2f руб.<br>%-15s %10.2f руб.', $product, $price, $product2, $price2, $product3, $price3);

    echo "\n ---------------------------------------------\n";

    $order1 = 1;
    $order42 = 42;
    $order125 = 125;

    printf('Заказ №%04d<br>Заказ №%04d<br>Заказ №%04d<br>', $order1, $order42, $order125);

    echo "\n---------------------------------------------\n";

    $orderNumber = 7;
    $product = 'Микрофон';
    $price = 2499.50;
    $quantity = 3;
    $discount = 10;

    $totalCost = $price * $quantity;
    $discountPrice = $totalCost * ($discount / 100);
    $finalPrice = $totalCost - $discountPrice;

    printf('Заказ №%04d<br>Товар: %s<br>Цена: %.2f руб.<br>Количество: %d шт.<br>Скидка: %d %%<br>Итого: %.2f руб.', $orderNumber, $product, $price, $quantity, $discount, $finalPrice);

    echo "\n---------------------------------------------\n";
?>