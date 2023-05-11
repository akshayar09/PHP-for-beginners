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
______________________________________________________________________________________________________________________________
DEFINING OBJECTS
*****************

* Can create multiple objects from a class.
* Objects of class are created using "new" keyword.

Example:

    <?php
    class Car {
        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name){
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
        function set_color($color){
            $this->color=$color;
        }
        function get_color() {
            return $this->color;
        }
    }

    $BMW =new Car();
    $Ford = new Car();
    $Audi = new Car();
    
    $BMW->set_name('BMW');
    $BMW->set_color('Black');
    $Ford->set_name('FORD');
    $Ford->set_color('Red');
    $Audi->set_name('AUDI');
    $Audi->set_color('White');

    echo "Name: " . $BMW->get_name();  // output:  BMW
    echo "<br";
    echo "Color: " . $BMW->get_color();  // output: Black
    echo "<br";
    echo "Name: " . $Ford->get_name(); // output: FORD
    echo "<br";
    echo "Color: " . $Ford->get_color();  // output: Red
    echo "<br";
    echo "Name: " . $Audi->get_name(); // output: AUDI
    echo "<br";
    echo "Color: " . $Audi->get_color();  // output: White
?>



* $this
      Refers to current object.
      Only available inside METHODS.

____________________________________________________________________________________________________________________
* 2 ways to change the value of property.

INSIDE THE CLASS                                    |      OUTSIDE THE CLASS
----------------------------------------------------|----------------------------------------------------
                                                    |
<?php                                               |          <?php
class Car {                                         |          class Car{
  public $name;                                     |             public $name;
  function set_name($name) {                        |          }
    $this->name = $name;                            |          $audi = new Car();
  }                                                 |          $audi->name = "Audi";
}                                                   |
$audi = new Fruit();                                |          echo $audi->name;
$audi->set_name("AUDI");                            |          ?>
                                                    |
echo $audi->name;                                   |
?>                                                  |

_______________________________________________________________________________________________________________
INSTANCEOF
*****************

* To check if an object belongs to a specific class.
Example:--
     <?php
     $Audi = new Car();
     var_dump($Audi instanceof Car);
     ?>
