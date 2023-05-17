- It means many forms.

- In OOPs plymorphism is closely related to INHERITANCE. 

- Allows OBJECTs of diff. CLASSes to respond differently bases on the same message.

- To implement POLYMORPHISM in php, we can use ABSTRACT CLASSes / INTERFACEs. 

- It helps to create a generic framework that has the diff OBJECT TYPE that share the same INTERFACE. 

1) POLYMORPHISM USING ABSTRACT CLASSES.
   
   - Abstract class named Person that has an abstract method called greet().

          <?php
          abstract class Person
          {
          abstract public function greet();
          }
          ?>

  - Define English, German & French classes that extend the Person class.

          <?php
          //.......
          class English extends Person
          {
             public function greet()
            {
                return "Hello!!!";
            }
          }
          class German extends Person
          {
             public function greet()
             {
                return 'Hallo!!!';
             }
          }
          class French extends Person
          {
             public function greet()
             {
                 return 'Bonjour!!!';
             }
          }
          //.....
          ?>
   - Define a func called greeting() which accepts array of Person OBJECT and call greet() method.
   
          <?php
          //.....
          function greeting($people)
          {
            foreach ($people as $person){
                echo $person->greet() . '<br';
            }
          }
          ?>
   - Define an array of OBJECTS of the English. German & Frenxh class and pass it to greeting() func.

          <?php
          // .....
          $people=[
            new English(),
            new German(),
            new French()
          ];
          greeting($people);
          ?>
       // OUTPUT :-- 
           // Hello!!!
           // Hallo!!!
           // Bonjour!!!
   - If we want another class just "ABC" extends Person...... 


2) PLYMORPHISM USING AN INTERFACE

   - Define INTERFACE called Greeting with greet() method 
         
         <?php
         interface Greeting
         {
            public function greet();
         }
         ?>

   - Define English, German & French class that implements the Greeting interface.
      
         <?php
         // ......
         class English implements Greeting
         {
            public function greet()
            {
                return 'Hello!!!';
            }
         }
         class German implements Greeting
         {
            public function greet()
            {
                return 'Hallo!!!';
            }
         }
         class French implements Greeting
         {
            public function greet()
            {
                return 'Bonjour!!!';
            }
         }
         ?>
  - Define greeting() func that accepts an array of objects that implements the Greeting interface.

         <?php 
         //....
         function greeting($greeters)
         {
            foreach ($greeters as $greeter)
            {
                echo $greeter->greet() . '<br>';
            }
         }
         ?>

   - Define an array of the Greeting objects and pass it to greeting() func.
    
         <?php
         // .....
         $greeters = [
            new English(),
            new German(),
            new French()

         ];
         greeting($greeters);
         ?>
   
