<?php

    class Config {
        private const APP_NAME = "PHP Learning";
        private const VERSION = "1.0";

        public function configInfo() {
            echo "\n Приложение: ", Config::APP_NAME, "\n Версия: ", Config::VERSION, "\n -------------------------------------------------------------------";
        }
    }

    define('APP_NAME', "PHP Learning");
    define('APP_VERSION', "1.0");
    define('MAX_USERS', 100);

    function appInfo() {
        echo "\n Приложение: ", constant('APP_NAME'), "\n Версия: ", constant('APP_VERSION'), "\n Максимум пользователей: ", constant('MAX_USERS'), "\n -------------------------------------------------------------------";
    }

    appInfo();

    //если констранта есть то она выводится
    if (defined('APP_NAME')) {
        echo "\n " . APP_NAME, "\n -------------------------------------------------------------------";
    } else {
        echo "\n Константа APP_NAME не найдена!\n -------------------------------------------------------------------";
    }

    if (defined('DATABASE_HOST')){
        echo "\n" . DATABASE_HOST, "\n -------------------------------------------------------------------"; 
    } else {
        echo "\n Константа DATABASE_HOST не найдена!\n -------------------------------------------------------------------";
    } 

    echo "\n " . __DIR__ . "\n -------------------------------------------------------------------";
    echo "\n " . __FILE__ . "\n -------------------------------------------------------------------";

    $config = new Config();
    $config->configInfo();
?>