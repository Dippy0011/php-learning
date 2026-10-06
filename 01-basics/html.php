<?php

    $str1 = '<h1>PHP Developer</h1>';

    echo "\n {$str1}";
    echo "\n " . htmlspecialchars($str1);

    $str2 = 'PHP < Developer & Backend > Junior';

    echo "\n {$str2}";
    echo "\n " . htmlspecialchars($str2);

    $str3 = '<p>Руслан — <b>PHP Developer</b></p>';

    echo "\n {$str3}";
    echo "\n " . htmlspecialchars(strip_tags($str3, '<p>'));
?>