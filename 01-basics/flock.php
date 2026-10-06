<?php
    

    $file = fopen(__DIR__ . "/counter.txt", "r+") or die("Не удалось открыть counter.txt");
    flock($file, LOCK_EX);
    $count = (int) trim(stream_get_contents($file));
    $count++;
    rewind($file);
    ftruncate($file, 0);
    fwrite($file, (string) $count);
    flock($file, LOCK_UN);
    fclose($file);

    $file = fopen(__DIR__ . "/counter.txt", "r") or die("Не удалось открыть counter.txt");
    flock($file, LOCK_SH);
    echo fgetc($file);
    flock($file, LOCK_UN);
    fclose($file);





?>