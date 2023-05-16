- Interface allows to specify a contract that a class must implement.
- To define an interface --> Use interface keyword.

SYNTAX:---> 
    <?php
    interface FirstInterface
    {
        // code to implement...
    }
    ?>

- An interface consist of method that have no implementaion.

- Means ,all methodsof interface are abstract methods.

- Interface can also includes constants.

Like:--> 
   <?php
   interface FirstInterfaces
   {
    const PI = 3.14;
    public function methodName();
   }
   ?>

- Methods in interface should be public. 
 
- While defining a child class that reuse properties and methods of another class, 
   the child class extends the parent class.

- A class can inherit from one class oly.

- But can implement multiple interfaces. 

- To define a class that implements an interface, use "implements" keyword.

EXAMPLE:--->  
      <?php
      interface MyIntrface
      {
        const CONSTANT_NAME = 4;

        public function methodName();
      }
      class Myclass implements MyIntrface
      {
        public function methodName()
        {
            // code to be executed......
        }
      }
      ?>


- When a class implements an interface ,it is a ---> CONCRETE CLASS

- CONCRETE CLASS needs to implement all the methods of the interface.

- Interface can extend another interface using "extends" keyword.

EXAMPLE:----> 
        <?php
         
        interface Readable
        {
            public function read();
        }

        interface Document extends Readable
        {
            public function print();
        }
        ?>



- By implementing INTERFACE 
        - Caller of OBJECT doesnt have to care about implementation of OJBECT'S  METHODs.

        - Only to care about OBJECT's INTERFACE.

        - So we can change the implementations without affecting the caller of interface.


- Interface allows unrelated classes to implement the same set of methods,
        - regardless of positions in class inheritance hierarchy.
    
- Enables to model multiple inheritence because a class can implement more than one interface.

