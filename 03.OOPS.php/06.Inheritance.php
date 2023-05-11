- Inheritance is WHEN A CLASS DERVIES FROM ANOTHER CLASS. 
- Inherited class is defined by using " extends " .
EXAMPLE---> 
         <?php
         class Dog{
            public $name;
            public $color;
            
            public function __construct($name,$color)
            {
                $this->name=$name;
                $this->color=$color;
            }
            public function title(){
                echo "My dog is {$this->name} and the color is {$this->color}.";
            }
         }
         // Husky is inherited from dog.
         class Husky extends Dog{
            public function message(){
                echo "I look like snow.";
            }
         }
         $myDog=new Husky("Husky","White");
         $myDog->title();
         $myDog->message();
         ?>
    // OUTPUT:-- My dog is Husky and the color is White.I look like snow.

- Extended class can use the public properties & public construct / title methods.
________________________________________________________________________________________________________________________
INHERITANCE & PROTECTED ACESS MODIFIER
***************************************
EXAMPLE:---> 
<?php
         class Dog{
            public $name;
            public $color;
            
            public function __construct($name,$color)
            {
                $this->name=$name;
                $this->color=$color;
            }
            protected function title(){
                echo "My dog is {$this->name} and the color is {$this->color}.";
            }
         }
         // Husky is inherited from dog.
         class Husky extends Dog{
            public function message(){
                echo "I look like snow.";
            }
         }
         $myDog=new Husky("Husky","White"); // NO ERROR -- construct is public.
         $myDog->title(); // ERROR -- title is protected.
         $myDog->message();// no error -- message is public.
         ?>
            --------------------------------------------------------------------------------------------
EXAMPLE2:---> 
            <?php
            class Dog{
            public $name;
            public $color;
            
            public function __construct($name,$color)
            {
                $this->name=$name;
                $this->color=$color;
            }
            protected function title(){
                echo "My dog is {$this->name} and the color is {$this->color}.";
            }
         }
         // Husky is inherited from dog.
         class Husky extends Dog{
            public function message(){
                echo "I look like snow.";
                // Call protected method from within derived class 
                $this->title();
            }
         }
         $myDog=new Husky("Husky","White"); //No error
         // $myDog->title();
         $myDog->message();  // No error    // and it calls title() which is protected from within derived class.
         ?>

- Protected method works bcz its called from inside of derived class.
__________________________________________________________________________________________________________________________
OVERRIDING INHRITED METHODS
****************************

- Can be overriden by redefining the methods with the same name in the child class.

EXAMPLE:---> 
          <?php
          class dogs{
            public $name;
            public $color;
            public function __construct($name,$color)
            {
                $this->name;
                $this->color;
            }
            public function intro(){
                echo "My dog is {$this->name} and the color is {$this->color}.";
            }
          }

          class Beagle extends dogs{
            public $age;
            public function __construct($name,$color,$age)
            {
                $this->name=$name;
                $this->color=$color;
                $this->age=$age;
            }
            public function intro(){
                echo "My dog is {$this->name}, the color is{$this->color} and age is {$this->age}";
             }
          }
          $myDog=new Beagle("Beagle","Black",5);
          $myDog->intro();
          ?>
_________________________________________________________________________________________________________________________
FINAL KEYWORD
*************
- final keyword can be used to prevent class inheritence or to prevent method overriding.