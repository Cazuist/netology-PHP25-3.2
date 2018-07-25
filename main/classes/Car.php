<?PHP    
    final class Car extends Object implements CarInterface
    {
        public $name;
        public $color;
        private $price;
        public $isAvailable = true;

        public function __construct($name, $color, $price, $isAvailable) 
        {
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
            $this->isAvailable = $isAvailable;

            self::$list[] = $this;           
        }

        public function getMessage() 
        {
            if ($this->isAvailable) {
                echo 'Есть в наличии';
            } else {
                echo 'Нет в наличии';
            }
        }
    }
?>