<?php

    function countDown(int $number): void {
        if ($number < 1) {
            return;
        } else {
            countDown($number - 1);
        }
        echo "\n Осталось товаров: " . $number;
      
    }
    
    function showProduct(string $productName) {
        echo "\n Товар: $productName";
    }

    function showPrice(int $price) {
        echo "\n Цена: $price руб";
    }

    function processPrices(array $prices, callable $callback): void {
        foreach ($prices as $price) {
            $callback($price);
        }
    }

    function showPrices(int $price) {
        echo "\n Цена товара: $price";
    }

    // задание 1
    countDown(5);
    echo "\n ----------------------------------------------------------";
    
    // задание 2
    $show1 = 'showProduct';
    $show2 = 'showPrice';
    $show3 = 'lol';

    if (is_callable($show1)) {
        echo $show1('Наушники');
    } else {
        echo "\n Функции не существует и не может быть вызвана";
    }

    if (is_callable($show2)) {
        echo $show2(5000);
    } else {
        echo "\n Функции не существует и не может быть вызвана";
    }

    if (is_callable($show3)) {
        echo $show3(3);
    } else {
        echo "\n Функции не существует и не может быть вызвана";
    }
    echo "\n ----------------------------------------------------------";

    // задание 3
    $prices = [5000, 3000, 800, 25000, 1500];
    processPrices($prices, 'showPrices');
    echo "\n ----------------------------------------------------------";

    // задание 4
    processPrices(
    $prices,
    function(int $price) {
         echo "\n Цена товара: $price"; 
        }
    );
    echo "\n ----------------------------------------------------------";

    // задание 5
    $newPrices = array_map(fn(int|float $a) => $a * 1.10, $prices);
    foreach ($newPrices as $price) {
        echo "\n Цена товара после + 10%: $price";
    }
    echo "\n ----------------------------------------------------------";

    // задание 6
    $discount = 10;
    $check = function (int|float $price) use ($discount): float {
        return $price * (1 - $discount / 100);
    };

    $discountedPrices = array_map($check, $prices);
    
     foreach ($discountedPrices as $price) {
        echo "\n Цена товара после - 10%: $price";
    }
    echo "\n ----------------------------------------------------------";
    
    // задание 7
    function showOrder(float $price, int $quantity, string $name) {
        function showTotal(float $price, int $quantity) {
            echo "\n Общая стоимость: " . $price * $quantity . " руб";
        }
        echo "\n Товар: " . $name;
        showTotal($price, $quantity);
    }

    showOrder(5000, 2, 'Наушники');
    echo "\n ----------------------------------------------------------";

    // задание 8
    $discount1 = 15;
    function processPrices1(array $prices, callable $callback): array {
        return array_map($callback, $prices);
    }

    $calculateDiscount = function (float $prices) use ($discount1): float {
        return $prices * (1 - $discount1 / 100);
    };

    $discountedPrices = processPrices1($prices, $calculateDiscount);

    foreach ($discountedPrices as $price) {
        echo "\n новый массив со скидкой 15%: $price";
    }

    echo "\n ----------------------------------------------------------";

    // задание 9
    class Product {

        private string $productName1;
        private float $price1;
        private static int $discountPercent = 10;


        public function __construct(string $productName1, float $price1) {
            $this->productName1 = $productName1;
            $this->price1 = $price1;
        }

        public function showName() {
            echo "\n Имя товара: " . $this->productName1;
        }

        public function showPrice() {
            echo "\n Цена товара: " . $this->price1 . " руб";
        }

        public function showInfo() {
            echo "\n Информация о товаре: " . $this->productName1;
        }

        public function __destruct() {
            
            echo " \n ---------------------------------------------------------- \n Объекты товара уничтожены! \n ----------------------------------------------------------";
        }

        public function __get(string $name): string|float|null
        {
            if (property_exists($this, $name)) {
                return $this->$name;
            }
                echo "\n Свойство $name не существует";
                return null;
        }
        

        public function __set(string $name, string|float $value): void {

            if (property_exists($this, $name)) {
                $this->$name = $value;
            }
        }

        public static function calculateDiscount(float $price, float $discount): float {
            echo "\n Цена после скидки " . $discount * 100 . "%: ";
            return $price - ($price * $discount);
        }

        public static function showDiscount(): int {
            return self::$discountPercent;
        }

        public function showProductData() {
            echo "\n Товар: " . $this->productName1 .
                 "\n Цена: " . $this->price1 . " руб" .
                 "\n Скидка: " . self::showDiscount() . "%";
        }

        public function __call(string $method, array $arguments): mixed {
            switch ($method) {
                case 'showDiscount':
                    echo "\n Скидка товара: 10%";
                    return null;

                case 'showCategory':
                    echo "\n Категория товара: Электроника";
                    return null;

                case 'showPriceWithDiscount':
                        $discount = (float) ($arguments[0] ?? 0);
                        $price = $this->price1 * (1 - $discount / 100);
                        echo "\n Цена со скидкой {$discount}%: {$price} руб";
                        return null;

                default:
                    return null;
            }
        }

        public function showShortInfo() {
            echo "\n Товар: {$this->productName1}, цена: {$this->price1} руб";
        }

        public function showPriceWithTax(float $price): float {
            $priceWithTax = $price + ($price * 0.2);
            echo "\n Цена с налогом 20%: {$priceWithTax}";
            return $priceWithTax;
        }
    }

    $product1 = new Product('Наушники', 5000);

    $methods = get_class_methods(Product::class);
    foreach($methods as $index) {
        echo "\n $index";
    }

    if (method_exists(Product::class, 'showName')) {
        echo "\n Метод showName существует!";
        $product1->showName();
    } else {
        echo "\n Метод showName не существует (";
    }

    echo "\n ----------------------------------------------------------";

    // задание 10

    if (method_exists(Product::class, 'deleteProduct')) {
        echo "\n Метод deleteProduct существует!";
        $product1->deleteProduct();
    } else {
        echo "\n Метод deleteProduct не существует (";
    }

    echo "\n ----------------------------------------------------------";

    // задание 11

    $product1->price1 = 4500;
    $product1->productName1 = 'Клавиатура';
    echo "\n " . $product1->productName1;
    echo "\n " . $product1->price1;
    $product1->category;
    echo "\n ----------------------------------------------------------";

    // задание 12

    $result = Product::calculateDiscount(5000, 0.1);
    echo $result;
    $result = Product::calculateDiscount(3000, 0.2);
    echo $result;
    $result = Product::calculateDiscount(10000, 0.15);
    echo $result;
    echo "\n ----------------------------------------------------------";

    // задание 13

    $result = Product::showDiscount();
    echo "\n $result";
    $product1->showProductData();
    echo "\n ----------------------------------------------------------";

    // задание 14

    $product1->showDiscount();
    $product1->showCategory();
    $product1->showSomething();
    $product1->showPriceWithDiscount(10);
    echo "\n ----------------------------------------------------------";

    // задание 15
    
    $product1->showShortInfo();
    echo "\n ----------------------------------------------------------";

    // задание 16

    function processProductPrice(float $price, callable $callback): void {
        $callback($price);
    }

    processProductPrice(4500, [$product1, 'showPriceWithTax']);
    processProductPrice(10000, [$product1, 'showPriceWithTax']);
    echo "\n ----------------------------------------------------------";

    // задание 17

    $product2 = null;
    $product2?->showName();

    $product2 = new Product('Монитор', 25000);
    $product2?->showName();
?>