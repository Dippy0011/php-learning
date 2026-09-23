<?php

    $prices = [
        5000,
        3000,
        1500,
        25000,
        4000,
        7000
    ];

    //подсчёт колличества товаров
    echo "Количество товаров: ", count($prices), "\n";

    //Общая стоимость
    $result = array_sum($prices);
    echo "Общая стоимость товаров: ", $result, "\n";
    
    //средняя цена
    $averagePrice = $result / count($prices);
    echo "Средняя стоимость товаров: ", $averagePrice, "\n";

    //случайный товар
    $rand = rand(0, count($prices) - 1);
    echo "Случайный товар: ", $prices[$rand], "\n";

    //строка как массив
    $language = "PHP";
    echo $language[0], "\n", $language[1], "\n", $language[2], "\n";
?>