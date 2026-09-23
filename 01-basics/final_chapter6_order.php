<?php

    class Order {

        private int $orderNumber;
        private static int $nextOrderNumber = 1;
        private string $clientName;
        private float $productPrice;
        private int $productQuantity;
        private int $discount;

        public function __construct($clientName, $productPrice, $productQuantity, $discount) {
            $this->orderNumber = self::$nextOrderNumber;
            self::$nextOrderNumber++;

            $this->clientName = $clientName;

            if (!$this->setPrice($productPrice)) {
                exit;
            }
            
            if (!$this->setQuantity($productQuantity)) {
                exit;
            }

            if (!$this->setDiscount($discount)) {
                exit;
            }
        }

        public function setPrice(float $productPrice): bool {
            if ($productPrice < 0) {
                echo "\n -ОШИБКА: цена товара не может быть меньше нуля-\n";
                return false;
            } else {
                $this->productPrice = $productPrice;
                return true;
            }
        }

        public function setQuantity(int $productQuantity): bool {
            if ($productQuantity < 1) {
                echo "\n -ОШИБКА: количество не может быть меньше одного-\n";
                return false;
            } else {
                $this->productQuantity = $productQuantity;
                return true;
            }
        }

        public function setDiscount(int $discount): bool {
            if ($discount >= 0 && $discount <= 100) {
                $this->discount = $discount;
                return true;
            } else {
                echo "\n -ОШИБКА: процент скидки не может быть меньше нуля или больше ста-\n";
                return false;
            }
        }

        public function orderPrice() {
            echo "\n Стоимость товара без скидки: ", $this->productPrice * $this->productQuantity, " руб", "\n Размер скидки: ", ($this->productPrice * $this->productQuantity) * ($this->discount / 100), " руб", "\n Итоговая цена: ", ($this->productPrice * $this->productQuantity) - (($this->productPrice * $this->productQuantity) * ($this->discount / 100)), " руб", "\n ---------------------------------------------------------";
        }

        public function orderInfo() {
            echo "\n ---------------------------------------------------------", "\n Номер заказа: ", $this->orderNumber, "\n Имя клиента: ", $this->clientName, "\n Цена товара: ", $this->productPrice, " руб",
            "\n Количество товара: ", $this->productQuantity, "\n Скидка: ", $this->discount, " %", "\n ---------------------------------------------------------", 
            $this->orderPrice();
        }
    }

    $order1 = new Order("Руслан", 5000, 2, 10);
    $order1->orderInfo();
    $order2 = new Order("Анна", 25000, 3, 20);
    $order2->orderInfo();
    $order3 = new Order("Иван", 1000, 4, 5);
    $order3->orderInfo();

    if (!$order1->setQuantity(5)) {
        exit;
    }

    $order1->orderInfo();


?>