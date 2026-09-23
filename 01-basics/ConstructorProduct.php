<?php

    class ConstructorProduct {

        public string $productName;
        private float $price;
        public int $quantity;

        public function __construct(string $productName, float $price, int $quantity) {
            $this->productName = $productName;
            $this->price = $price;
            $this->quantity = $quantity;
        }

        public function getPrice(): float {
            return $this->price;
        }
    }
    

?>