- Inheritance will enable the code reuse in diff. classes with same inheritance hierarchy.

- ie; Moving the functionality of classes to methods of the parent class.

- But it makes the code tightly coupled.
               ---> Tight coupling means CLASSES & OBJECTS are DEPENDENT ON ONE ANOTHER.
               ---> It is not good, bcz it will REDUCE THE FLEXIBILITY & REUSABILITY of the code.  
- TRAIT ---> To overcome this situation.

- Allows to reuse various methods freely in many diff. classes & that need not to be in the same class heirarchy.

- Trait is similar to class.

- It is only for grouping methods in a consistent way.

- An inheritence only allow one single parent to be inherited by a child.

- Traits helps to inheit multiple behaviours.


- SYNTAX:---> 

       <?php
       trait TraitName
       {
        // .....
       }
       ?>

- To use a TRAIT in a CLASS ,use the ' USE'  keyword.

- SYNTAX:----> 
      <?php
      class Myclass
      {
         use TraitName;
      }
      ?>

- EXAMPLE ----> 
     
     <?php
     // declare a trait ie; message1
     trait message1
    {
        public function msg1()
        {
            echo "I am trait!!";
        }
    }
    // create a class ie; Welcome
    class Welcome
    {
        // use trait $ all methods in trait.
        use message1;
    }
    $message = new Welcome();
    $message->msg1();             // I am trait!!
     ?>

- USING MULTIPLE TRAITS

-EXAMPLE:---> 
       <?php
       trait Messages
       {
        public function msgs()
        {
            echo "Hi , I am trait!";
        }
       }

       trait Messages2
       {
        public function msg2()
        {
            echo " I am here to help you!";
        }
       }

       class Fresher
       {
        use Messages;
       }

       class Fresher2
       {
        use Messages,Messages2;
       }
       $obj = new Fresher();
       $obj->msgs();            // Hi , I am trait!
          
       echo "<br>";

       $obj2 = new Fresher2();
       $obj2->msgs();         //  Hi , I am trait!
       $obj2->msg2();         //  I am here to help you!
       ?>


