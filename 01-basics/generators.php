<?php

    // задание 1

    function generateProducts(int $count): Generator {
        for ($i = 1; $i <= $count; $i++) {
            yield $i;
        }
    }

    foreach (generateProducts(5) as $val) {
        echo "\n Товар №{$val}";
    }

    echo "\n ----------------------------------------------------------------------";

    // задание 2

    function generateProductsWithKeys($arr = []): Generator {
        $names = ['Наушники', 'Клавиатура', 'Мышь', 'Монитор', 'Микрофон'];

        if ($arr === []) {
            foreach ($names as $index => $name) {
                $arr["product" . ($index + 1)] = $name;
            }
        }

        foreach ($arr as $key => $value) {
            yield $key => $value;
        }
    }

    foreach (generateProductsWithKeys() as $key => $value) {
        echo "\n {$key} {$value}";
    }

    echo "\n ----------------------------------------------------------------------";

    // задание 3

    function generator1(): generator {
        yield 'Наушники';
        yield 'Клавиатура';
    }
    
    function generator2(): generator {
        yield from generator1();
        yield 'Монитор';
        yield 'Микрофон';
    }

    foreach (generator2() as $i) echo "\n {$i}";
    echo "\n ----------------------------------------------------------------------";

    // задание 4

    function generateNumbers(int $max): Generator {
        for ($i = 1; $i <= $max; $i++) {
            yield $i;
        }
    }

    $count = 0;

    foreach (generateNumbers(1000000) as $number) {
        $count++;
    }

    echo "\n Количество полученных чисел: {$count}";
    echo "\n ----------------------------------------------------------------------";

    // задание 5

    function generateProducts1(): Generator {

        yield 'product1' => 'Наушники';
        yield 'product2' => 'Клавиатура';
        yield 'product3' => 'Мышь';
        yield 'product4' => 'Монитор';
        yield 'product5' => 'Микрофон';

    }

    foreach (generateProducts1() as $key => $value) echo "\n {$key} -- {$value}";
    echo "\n ----------------------------------------------------------------------";

    // задание 6 

    function &generateNumbers1(): Generator {

        $number = 5;
        while ($number > 0) {
            yield $number;
        }

    }

    foreach (generateNumbers1() as &$number) {
        echo "\n " . --$number;
    }

    unset($number);
    echo "\n ----------------------------------------------------------------------";

    // задание 7

    function testGenerator(): Generator {
        yield 1;
        yield 2;
        yield 3;
    }

    $generator = testGenerator();
    echo "\n " . gettype($generator);
    echo "\n " . $generator instanceof Generator;
    echo "\n ----------------------------------------------------------------------";

    // задание 8 

    function messageGenerator(): generator {

        while (true) {

            $string = yield; 
            echo "\n Получено: {$string}";

        }

    }

    $message = messageGenerator();
    $message->send('первая строка');
    $message->send('вторая строка');
    $message->send('третья строка');
    echo "\n ----------------------------------------------------------------------";

    // задание 9

    function gen(): generator {
        for ($a = 1; $a < 4; $a++) {
            yield $a;
        }
        return --$a;

    }

    $result12 = gen();

    foreach ($result12 as $i) echo "\n {$i}";

    echo "\n Итог: " . $result12->getReturn();