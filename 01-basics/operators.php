<?php

    $balance = 1000;
    echo "Баланс: $balance" . PHP_EOL;

    #пополнение баланса
    $balance += 500; 
    echo "Баланс после пополнения: $balance" . PHP_EOL;

    #списание со счета
    $balance -= 200;
    echo "Баланс после списания: $balance" . PHP_EOL;

    #умножение баланса на 2
    $balance *= 2;
    echo "Баланс после умножения на 2: $balance" . PHP_EOL;

    #деление баланса на 4
    $balance /= 4;
    echo "Баланс после деления на 4: $balance" . PHP_EOL;
?>