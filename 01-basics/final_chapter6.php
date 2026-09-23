<?php

    class Product{

        public string $productName;
        private float $price;
        private int $quantity;

        public function __construct(string $productName, float $price, int $quantity) {
            $this->productName = $productName;
            $this->price = $price;

            if (!$this->setQuantity($quantity)){
                exit;
            }
        }

        public function getPrice(): float {
            return $this->price;
        }

        public function getTotal(): float {
            return $this->price * $this->quantity;
        }

        public function showInfo() {
            echo "Товар: ", $this->productName, "\nЦена: ", $this->price, " руб.\n", "Количество: ", $this->quantity, "\nОбщая стоимость: ", $this->getTotal(), " руб.\n-------------------------\n";
        }

        public function setQuantity(int $quantity): bool {
            if ($quantity < 1) {
                echo "\n-ОШИБКА: количество не может быть меньше одного-\n";
                return false;
            } else {
                $this->quantity = $quantity;
                return true;
            }
        }

        public function getQuantity(): int {
            return $this->quantity;
        }
    }

    $product1 = new Product("Наушники", 5000, 2);
    $product2 = new Product("Клавиатура", 3000, 1);
    $product3 = new Product("Монитор", 25000, 1);

    $product1->showInfo();

    if (!$product1->setQuantity(5)) {
        exit;
    }

    $product1->showInfo();
    $product2->showInfo();
    $product3->showInfo();


?>