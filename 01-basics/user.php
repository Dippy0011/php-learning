<?php

    function getUserDescription(string $name, int $age, string $city): string {
        $description = "Пользователь $name, $age лет, город $city.";

        return $description;
    }

    $name = "Руслан";
    $age = 20;
    $city = "Москва";

    $description = getUserDescription($name, $age, $city);
    echo $description . PHP_EOL;

    $name = "Анна";
    $age = 25;
    $city = "Санкт-Петербург";

    $description = getUserDescription($name, $age, $city);
    echo $description . PHP_EOL;
?>