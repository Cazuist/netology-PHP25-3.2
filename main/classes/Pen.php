<?php
    final class Pen extends Object implements PenInterface
    {
        public function __construct($name = 'Simple', $inkColor = 'blue', $material = 'plastic', $price = 25)
        {
            $this->name = $name;
            $this->inkColor = $inkColor;
            $this->material = $material;
            $this->price = $price;

            self::$list[] = $this;
        }

        public function getSimpleInfo($name, $price)
        {
            echo "Товвар {$name}, цена {$price} руб.";
        }
    }
?>