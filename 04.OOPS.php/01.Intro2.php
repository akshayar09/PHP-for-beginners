CLASSES
***********

SYNTAX:-
 <?php
 class Cars {
    // code goes here ...
 }
 ?>


Example:--
       <?php
       class Cars {
        //properties
        public $name;
        public $color;

        //Methods
        function set_name($name){
            $this -> name = $name;
        }
        function get_name() {
            return $this->name;
        }
       }
       ?>