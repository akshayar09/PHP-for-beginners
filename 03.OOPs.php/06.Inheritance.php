- Inheritance allows you to reuse the code from another class without duplicating it.

- In inheritance we have a parent class with properties & methods.

- And a child class can use the code from the parent class.

- Parent class is also called a base class / super class.

- Chils class is known as derived class / subclass.

- To define a class inherits from another class, use "extends" keyword.

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

FINAL KEYWORD
*************
- final keyword can be used to prevent class inheritence or to prevent method overriding.
SYNTAX:----> 
      <?php
      final class Dog{
        //code
      }  
      // This will give error 
      class Husky extends Dog{
        // code
      }
      ?>