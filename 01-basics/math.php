<?php

echo "\n" . M_PI;
echo "\n" . M_E;
echo "\n" . M_SQRT2;
echo "\n" . pi();

// округление
echo "\n round():";
echo "\n" . round(3.4) . "\n" . round(3.5) . "\n" . round(3.6) . "\n" . round(3.999) . "\n" . round(-3.4) . "\n" . round(-3.5) . "\n" . round(-3.6);
//округление в большую сторону
echo "\n ceil():";
echo "\n" . ceil(3.4) . "\n" . ceil(3.5) . "\n" . ceil(3.6) . "\n" . ceil(3.999) . "\n" . ceil(-3.4) . "\n" . ceil(-3.5) . "\n" . ceil(-3.6);
//округление в меньшую сторону
echo "\n floor():";
echo "\n" . floor(3.4) . "\n" . floor(3.5) . "\n" . floor(3.6) . "\n" . floor(3.999) . "\n" . floor(-3.4) . "\n" . floor(-3.5) . "\n" . floor(-3.6);
//модуль числа
echo "\n abs():";
echo "\n" . abs(25) . "\n" . abs(-25);
//round() с точностью
echo "\n round() с точностью:";
echo "\n" . round(123.456, 2);
echo "\n" . round(123.456, 1);
echo "\n" . round(123.456, 0);
echo "\n" . round(127.256, -1);
echo "\n" . round(127.256, -2);
echo "\n" . round(127.256, -3);

//round() с точностью и режимом округления
echo "\n PHP_ROUND_HALF_UP:";
echo "\n" . round(3.5, 0, PHP_ROUND_HALF_UP) . "\n" . round(4.5, 0, PHP_ROUND_HALF_UP) . "\n" . round(-3.5, 0, PHP_ROUND_HALF_UP) . "\n" . round(-4.5, 0, PHP_ROUND_HALF_UP);
echo "\n PHP_ROUND_HALF_DOWN:";
echo "\n" . round(3.5, 0, PHP_ROUND_HALF_DOWN) . "\n" . round(4.5, 0, PHP_ROUND_HALF_DOWN) . "\n" . round(-3.5, 0, PHP_ROUND_HALF_DOWN) . "\n" . round(-4.5, 0, PHP_ROUND_HALF_DOWN);
echo "\n PHP_ROUND_HALF_EVEN:";
echo "\n" . round(3.5, 0, PHP_ROUND_HALF_EVEN) . "\n" . round(4.5, 0, PHP_ROUND_HALF_EVEN) . "\n" . round(-3.5, 0, PHP_ROUND_HALF_EVEN) . "\n" . round(-4.5, 0, PHP_ROUND_HALF_EVEN);
echo "\n PHP_ROUND_HALF_ODD:";
echo "\n" . round(3.5, 0, PHP_ROUND_HALF_ODD) . "\n" . round(4.5, 0, PHP_ROUND_HALF_ODD) . "\n" . round(-3.5, 0, PHP_ROUND_HALF_ODD) . "\n" . round(-4.5, 0, PHP_ROUND_HALF_ODD);

//rand()
//рандомное число от 1 до 100
echo "\n rand(1, 100):";
echo "\n" . rand(1, 100);
//5 рандомных чисел от 1 до 10
echo "\n 5 рандомных чисел от 1 до 10:";
for ($i = 0; $i < 5; $i++) {
    echo "\n" . rand(1, 10);
}
//максимально возможное рандомное число
echo "\n getrandmax():";
echo "\n" . getrandmax();

//random_int():
//рандомное число от 1 до 100
echo "\n random_int(1, 100):";
echo "\n" . random_int(1, 100);
//рандомное число от -100 до 0
echo "\n random_int(-100, 0):";
echo "\n" . random_int(-100, 0);
//5 рандомных чисел от 1 до 10
echo "\n 5 рандомных чисел от 1 до 10:";
for ($i = 0; $i < 5; $i++) {
    echo "\n" . random_int(1, 10);
}

//base_convert('FF', 16, 2)
//первод числа из одной системы счисления в другую
echo "\n base_convert('FF', 16, 2):";
echo "\n" . base_convert('FF', 16, 2);
echo "\n base_convert('1010', 2, 10):";
echo "\n" . base_convert('1010', 2, 10);
echo "\n base_convert('255', 10, 16):";
echo "\n" . base_convert('255', 10, 16);
echo "\n base_convert('777', 8, 10):";
echo "\n" . base_convert('777', 8, 10);

//bindec(), hexdec(), octdec()
//bindec() из двоичной в десятичную
echo "\n bindec('1010'):";
echo "\n" . bindec('1010');
//hexdec() из шестнадцатеричной в десятичную
echo "\n hexdec('FF'):";
echo "\n" . hexdec('FF');
//octdec() из восьмеричной в десятичную
echo "\n octdec('777'):";
echo "\n" . octdec('777');

//decbin(), decoct() и dechex() 
//decbin() из десятичной в двоичную
echo "\n decbin(10):";
echo "\n" . decbin(10);
//decoct() из десятичной в восьмеричную
echo "\n decoct(255):";
echo "\n" . decoct(255);
//dechex() из десятичной в шестнадцатеричную
echo "\n dechex(255):";
echo "\n" . dechex(255);

//min() и max()
//min() - ищет минимальное значение
echo "\n min(1, 2, 3, 4, 5):";
echo "\n" . min(1, 2, 3, 4, 5);
//max() - ищет максимальное значение
echo "\n max(1, 2, 3, 4, 5):";
echo "\n" . max(1, 2, 3, 4, 5);
//min([10, 3, 25, 7]) и max([10, 3, 25, 7]) - могут принимать массив
echo "\n min([10, 3, 25, 7]):";
echo "\n" . min([10, 3, 25, 7]);
echo "\n max([10, 3, 25, 7]):";
echo "\n" . max([10, 3, 25, 7]);

//infinity и NAN
//infinity - бесконечность
echo "\n infinity:";
echo "\n" . INF;
//NAN - Not a Number
echo "\n NAN:";
echo "\n" . NAN;

//is_finite() и is_infinite()
//is_finite() - проверяет, является ли число конечным
echo "\n is_finite(1):";
echo "\n" . is_finite(1);
//is_infinite() - проверяет, является ли число бесконечным
echo "\n is_infinite(INF):";
echo "\n" . is_infinite(INF);

//is_nan()
//is_nan() - проверяет, является ли число NAN
echo "\n is_nan(NAN):";
echo "\n" . is_nan(NAN);

//min() и max() с массивом
$numbers = [42, 7, 91, 15, 3, 28];
$value = sqrt(-1);
echo "\n Минимум: " . min($numbers) . "\n Максимум: " . max($numbers);
echo "\n is_nan(): " . is_nan($value);

// sqrt()
echo "\n sqrt(9):";
echo "\n" . sqrt(9);
echo "\n sqrt(16):";
echo "\n" . sqrt(16);
echo "\n sqrt(25):";
echo "\n" . sqrt(25);

//pow()
echo "\n pow(2, 3):";
echo "\n" . pow(2, 3);
echo "\n pow(5, 2):";
echo "\n" . pow(5, 2);
echo "\n pow(10, 3):";
echo "\n" . pow(10, 3);

//log() и log10()
echo "\n log(15, 10):";
echo "\n" . log(15, 10);
echo "\n log(20, 10):";
echo "\n" . log(20, 10);
echo "\n log10(20):";
echo "\n" . log10(20);

//exp()
echo "\n exp(1):";
echo "\n" . exp(1);
echo "\n exp(2):";
echo "\n" . exp(2);

// deg2rad() и rad2deg()
echo "\n deg2rad(180):";
echo "\n" . deg2rad(180);
echo "\n deg2rad(90):";
echo "\n" . deg2rad(90);
echo "\n deg2rad(45):";
echo "\n" . deg2rad(45);
echo "\n rad2deg(pi()):";
echo "\n" . rad2deg(pi());
echo "\n rad2deg(pi() / 2):";
echo "\n" . rad2deg(pi() / 2);
echo "\n rad2deg(pi() / 4):";
echo "\n" . rad2deg(pi() / 4);

// sin(), cos(), tan()
echo "\n sin(pi() / 2):";
echo "\n" . sin(pi() / 2);
echo "\n cos(pi() / 2):";
echo "\n" . cos(pi() / 2);
echo "\n tan(pi() / 2):";
echo "\n" . tan(pi() / 2);

echo "\n sin(30°):";
echo "\n" . sin(deg2rad(30));
echo "\n cos(30°):";
echo "\n" . cos(deg2rad(30));
echo "\n tan(30°):";
echo "\n" . tan(deg2rad(30));

echo "\n sin(60°):";
echo "\n" . sin(deg2rad(60));
echo "\n cos(60°):";
echo "\n" . cos(deg2rad(60));
echo "\n tan(60°):";
echo "\n" . tan(deg2rad(60));

echo "\n sin(45°):";
echo "\n" . sin(deg2rad(45));
echo "\n cos(45°):";
echo "\n" . cos(deg2rad(45));
echo "\n tan(45°):";
echo "\n" . tan(deg2rad(45));

//asin() and acos() and atan() and atan2()
echo "\n asin(0):";
echo "\n" . rad2deg(asin(0));
echo "\n asin(0.5):";
echo "\n" . rad2deg(asin(0.5));
echo "\n asin(1):";
echo "\n" . rad2deg(asin(1));

echo "\n acos(0):";
echo "\n" . rad2deg(acos(0));
echo "\n acos(0.5):";
echo "\n" . rad2deg(acos(0.5));
echo "\n acos(1):";
echo "\n" . rad2deg(acos(1));

echo "\n atan(0):";
echo "\n" . rad2deg(atan(0));
echo "\n atan(1):";
echo "\n" . rad2deg(atan(1));
echo "\n atan(0.5):";
echo "\n" . rad2deg(atan(0.5));

echo "\n atan2(1, 1):";
echo "\n" . rad2deg(atan2(1, 1));
echo "\n atan2(1, 0):";
echo "\n" . rad2deg(atan2(1, 0));
echo "\n atan2(0, 1):";
echo "\n" . rad2deg(atan2(0, 1));

$cathetusA = 3;
$cathetusB = 4;
$hypotenuse = sqrt(pow($cathetusA, 2) + pow($cathetusB, 2));
$angleOppositeA = rad2deg(atan2($cathetusA, $cathetusB));

echo "\n\nRight triangle:";
echo "\nHypotenuse: " . $hypotenuse;
echo "\nAngle opposite cathetus A: " . $angleOppositeA . " degrees";
