<?php

    $name = 'Руслан';
    $surname = 'Багов';
    $profession = 'PHP Developer';
    $city = 'Железноводск';
    $fullName = implode(' ', [$name, $surname]);

    echo implode(' — ', [$fullName, $profession, $city]);
    echo "\n ------------------------------------------------------------------------\n";

    $str = 'PHP,SQL,Git,Docker';
    
    echo implode("\n", explode(',', $str));
    echo "\n ------------------------------------------------------------------------\n";

    $str = "Наушники;Клавиатура;Мышь;Монитор";
    $str = implode(",", explode(";", $str));
    $str = explode(",", $str);
    $str[] = 'Микрофон';
    $str = implode(",", $str);
    $str = implode(" | ", explode(",", $str));

    echo "\n {$str}";
    echo "\n ------------------------------------------------------------------------\n";

    $str = 'php,backend,sql,git';
    $str = explode(",", $str);
    $str[] = 'docker';

    foreach ($str as $key => $value){

        if ($value === 'git') {

            unset($str[$key]);
        }
    }

    $str = implode(", ", $str);

    echo "\n {$str}";


?>