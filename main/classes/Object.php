<?PHP    
    abstract class Object
    {
        public static $list = [];

        public function getInfo()
        {
            echo 'Я экземпляр класса "'.get_class($this).'". Мой родительский класс "'.get_parent_class($this).'"';
        }

                
    }
?>