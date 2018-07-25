<?php
    final class Product extends Object implements ProductInterface
    {
        private $category;
        private $name;
        private $price;
        private $isAvailable;
        private $discount = 0;

        public function __construct($category, $name, $price, $isAvailable = true, $discount = 0)
        {
            $this->category = $category;
            $this->name = $name;
            $this->price = $price;
            $this->isAvailable = $isAvailable;
            $this->discount = $discount;

            self::$list[] = $this;
        }

        public function getProperties()
        {
            $properties = [];
            $properties[] = $this->category;
            $properties[] = $this->name;
            $properties[] = $this->price;
            return $properties;
        }

        public function setSize($width, $length, $height = 1)
        {
            $this->size = $width * $length * $height;
        }
    }
?>