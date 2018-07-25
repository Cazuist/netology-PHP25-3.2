<?php
    final class TV extends Object implements TVInterface
    {
        public $isColor;

        public function __construct($name, $price) 
        {
            $this->name = $name;            
            $this->price = $price;

            self::$list[] = $this;
        }

        public function getMessage()
        {
            if ($this->isColor) {
                return 'Цветной';
            }
            else {
                return 'Черно-белый';
            }
        }
    }
?>