- Abstract class is a class that can't be instantiated.
- Typically an abstract defines an interfaces for other classes to extend.
- To define an abstract class --> use abstract keyword.
SYNTAX:---> 
      <?php
      abstract class className
      {
        //....
      }
      ?>

- It can have properties and methods as a regular class.
- Similarly abstract method also have no implementation.
- To define an abstract method --> use abstract keyword.

SYNTAX:---> 
        <?php     
        abstract function methodName(arguments);
        ?>


- If a class extends an abstract class, it must implement all ABSTRACT methods
   or itself be declared as abstract.

EXAMPLE:----> 
          <?php 
          abstract class Dumper
          {
            abstract public function dump($data);
          }
          class WebDumper extends Dumper
          {
            public function dump($data)
            {
                echo '<pre>';
                var_dump($data);
                echo '</pre>';
            }
          }
          $webDumper = new WebDumper();
          $webDumper->dump('PHP abstract class repo!');  // string(24) "PHP abstract class repo!"

          
          ?>