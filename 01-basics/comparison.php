<?php
    //переменные для сравнения
    $age = 20;
    $minimum_age = 18;
    $salary = 50000;
    $desired_salary = 40000;

    //выводим значения переменных
    echo "Возраст: $age" . PHP_EOL;
    echo "Минимальный возраст: $minimum_age" . PHP_EOL;
    echo "Зарплата: $salary" . PHP_EOL;
    echo "Желаемая зарплата: $desired_salary" . PHP_EOL;
    echo PHP_EOL;

    //сравниваем значения переменных
    echo "Возраст больше или равен 18?: " . ($age >= $minimum_age) . PHP_EOL;
    echo "Зарплата больше 40 000?: " . ($salary > $desired_salary) . PHP_EOL;
    echo "Возраст равен 20?: " . ($age == 20) . PHP_EOL;
    echo "Возраст не равен 30?: " . ($age != 30) . PHP_EOL;
    echo "Зарплата строго равна 50000?: " . ($salary === 50000) . PHP_EOL;
    echo PHP_EOL;

    //маленькая проверка
    $number = 10;
    $stringNumber = "10";

    echo "Число равно строке?: " . ($number == $stringNumber) . PHP_EOL;
    echo "Число строго равно строке?: " . ($number === $stringNumber) . PHP_EOL;
?>