<?php

    $age = 20;
    $has_account = true;
    $is_blocked = false;

    if ($age >= 18 && $has_account && !$is_blocked) {
        echo "Доступ разрешен" . PHP_EOL;
    } else {
        echo "Доступ запрещен" . PHP_EOL;
        if ($age < 18) {
            echo "Возраст меньше 18 лет" . PHP_EOL;
        }
        if (!$has_account) {
            echo "У пользователя нет аккаунта" . PHP_EOL;
        }
        if ($is_blocked) {
            echo "Аккаунт заблокирован" . PHP_EOL;
        }
    }
?>