<?php

    class EncapsulatedProduct {

        public string $productName;
        private float $price;
        public int $quantity;

        public function setPrice(float $price): bool {
            if ($price >= 0) {
                $this->price = $price;
                return true;
            }else{
                echo "Ошибка: цена не может быть отрицательной\n";
                return false;
            }
        }

        public function getPrice(): float {
            
            return $this->price;
        }
    }   

?>