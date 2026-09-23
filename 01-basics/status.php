<?php

    $status = "rejected";

    switch ($status) {
        case "pending":
            echo "Ожидает рассмотрения" . PHP_EOL;
            break;
        case "approved":
            echo "Одобрено" . PHP_EOL;
            break;
        case "rejected":
            echo "Отклонено" . PHP_EOL;
            break;
        default:
            echo "Неизвестный статус" . PHP_EOL;
    }

    $txt = match ($status) {
        "pending" => "Ожидает рассмотрения" . PHP_EOL,
        "approved" => "Одобрено" . PHP_EOL,
        "rejected" => "Отклонено" . PHP_EOL,
        default => "Неизвестный статус" . PHP_EOL,
    };
    echo $txt . PHP_EOL;


?>