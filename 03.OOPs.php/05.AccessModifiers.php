3 ACCESS MODIFIERS
******************
 1)public   ----> property / method can be accessed from everwhere. & its default.
 2)protected----> Can be accessed within the class and by classes derived from that class.
 3)private  ----> Only be accessed with in the class

 EXAMPLE1:---> 
        <?php
        class Cars {
            public $name;
            protected $color;
            private $price;
        }
        $mycar = new Cars();
        $mycar ->name="Audi";
        $mycar ->color="red"; // ERROR
        $mycar -> price = "3200000"; // ERROR
        ?>
______________________________________________________________________________________________________________________
EXAMPLE2:---> 
          <?php
          class Car{
            public $name;
            public $color;
            public $price;

            function set_name($n){
                $this->name = $n;
            }
            protected function set_color($n){
                $this_color=$n;
            }
            private function set_price($n){
                $this_price=$n;
            }
          }
          $mycar = new Car();
          $mycar ->set_name("Audi");  // NO ERROR
          $mycar ->set_color("Black");  // ERROR
          $mycar ->set_price("3200000");  //ERROR
          ?>