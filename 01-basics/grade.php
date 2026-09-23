<?php

    $score = 95;
    echo "Баллы: $score" . PHP_EOL;

    if($score >= 90 && $score <= 100) {
        echo "Отлично" . PHP_EOL;
    } elseif($score >= 75 && $score <= 89) {
        echo "Хорошо" . PHP_EOL;
    } elseif($score >= 60 && $score <= 74) {
        echo "Удовлетворительно" . PHP_EOL;
    } elseif($score >= 0 && $score <= 59) {
        echo "Неудовлетворительно" . PHP_EOL;
    } else {
        echo "Некорректный балл" . PHP_EOL;
    }

?>