<?php
	interface CarInterface
    {
        public function __construct($name, $color, $price, $isAvailable);
    }    

    interface TVInterface
    {
        public function getMessage();
    }    

    interface DuckInterface
    {
        public function isReadyForChristmas();
    }    

    interface PenInterface
    {
        public function getSimpleInfo($name, $price);
    }    

    interface ProductInterface
    {
        public function setSize($width, $length, $height);
    }
?>