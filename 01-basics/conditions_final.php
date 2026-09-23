<?php

    $name = "Руслан";
    $age = 20;
    $hasAccount = true;
    $isBlocked = false;
    $status = "active";
    $role = null;
    
    
    $message = $hasAccount === true
    ? "\n Аккаунт существует"
    : "\n Аккаунта нет";
    echo "\n$message";


    if ($age < 18) {
        echo "\n Доступ запрещён!";
    } elseif ($age >= 18 && $age < 60) {
        echo "\n Доступ разрешён!";
        if ($hasAccount === true) {
           if (!$isBlocked) {
            echo "\n Пользователь может войти";
            $role = $role ?? "guest";

            switch($status) {
                case "active":
                    echo "\n Пользователь активен";
                    break;
                case "blocked":
                    echo "\n Пользователь заблокирован";
                    break;
                case "pending":
                    echo "\n Ожидает подтверждения";
                    break;
                default:
                    echo "\n Некорректный ввод";
            }
            
            echo match ($role) {
                "guest" => "\n Ваша роль Гость",
                "user" => "\n Ваша роль пользователь",
                "admin" => "\n Ваша роль админ"

            };
           } else {
            echo "\n Пользователь не может войти";
           }
        } else {
            $message = "Аккаунт не существует";
            echo "\n $message";
        }
    } else {
        echo "\n Требуется дополнительная проверка!";
    }


    
?>
