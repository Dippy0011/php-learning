<?php

    $file = fopen(__DIR__ . "/test.txt", "w") or die ("test.txt не найден");
    fwrite($file, "Первая запись" . PHP_EOL);
    fflush($file);
    fwrite($file, "Вторая запись" . PHP_EOL);
    fclose($file);

    $file = fopen(__DIR__ . "/test.txt", "r") or die ("test.txt не найден");
    while ($a = fgets($file)) {
        echo $a;
    }
    fclose($file);

?>