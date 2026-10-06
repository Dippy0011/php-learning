<?php

    $file = fopen(__DIR__ . "/visits.txt", "r+");
    flock($file, LOCK_EX);
    $count = (int) fread($file, 100);
    $count = ++$count;
    rewind($file);
    ftruncate($file, 0);
    fwrite($file, $count);
    fflush($file);
    flock($file, LOCK_UN);
    fclose($file);

    $file = fopen(__DIR__ . "/visits.txt", "r");
    flock($file, LOCK_SH);
    $count1 = (int) fread($file, 100);
    echo PHP_EOL . "Посещений: {$count1}";
    flock($file, LOCK_UN);
    fclose($file);
    

?>