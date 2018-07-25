<?php
    final class Duck extends Object
    {
        public $color;
        public $weight;
        public $isPet;

        public function __construct($color, $weight, $isPet = false)
        {
            $this->color = $color;
            $this->weight = $weight;
            $this->isPet = $isPet;

            self::$list[] = $this;
        }

        public function isReadyForChristmas()
        {
            if ($this->isPet) {
                return 'Моя любимая утка';
            } else {
                if($this->weight > 2000) {
                    return 'В духовку';
                } else {
                    return 'Пусть подрастет!';
                }
            }                
        }
    }
?>