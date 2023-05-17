* Allows to initialize an objects properties upon creation of the object.

* Construct func starts with 2 underscores "__"

* By creating a construct func, php will automatically call this func when we create an object from a class.

EXAMPLE:---> 
       <?php
       class Car{
        public $name;
        public $color;

        function __construct($name)
        {
            $this->name=$name;
            
        }
        function get_name(){
            return $this->name;
        }
       }
       $my_car=new Car("BMW");
       echo $my_car->get_name(); // output :- BMW
       ?>
______________________________________________________________________________________________________________________
EXAMPLE ----> 
        <?php
        class cars{
            public $name;
            public $color;

            function __construct($name, $color)
            {
             $this->name=$name;
             $this->color=$color;   
            }
            function get_color(){
                return $this->color;
            }
            function get_name(){
                return $this->name;
            }
        }

        $my_car=new car("BMW", "red");
        echo $my_car->get_name();// output: BMW
        echo "<br>";
        echo $my_car->get_color();// Output: red
        ?>
