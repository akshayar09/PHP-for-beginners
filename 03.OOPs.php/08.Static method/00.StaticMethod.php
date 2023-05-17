- When defining a CLASS with METHODS & PROPERTIES(M & P).

- To use them, we create an object to access.

- These M & P are bound to an instance of the class -------------------------> INSTANCE METHODS & PROPEERTIES. 

- Acessing M & P in the context of a class rather than object ---------------> CLASS METHODS & PROPERTIES.

- Static methods can be called directly.

- Static methods are declared with the " static " kwyword.
                                        ********
- SYNTAX:---> 
         <?php
         class ClassName
         {
            public static function StaticMethod()
            {
                echo " Intro to static method";
            }
         }
         ?>

- To access static method , use the CLASS NAME :: METHOD NAME

-SYNTAX:---> 
         <?php
         ClassName::StaticMethod();
         ?>

-EXAMPLE:---> 
        <?php
        class greeting
        {
            public static function welcome()
            {
                echo " Hello World";
            }
        }

        // Call static method
        greeting::welcome();
        ?>

-EXAMPLE 2---> 

   - A class can have both STATIC & NON-STATIC methods.

   - Static can be accessed from a method in the same class using " self " keyword.
                                                                   ******
        <?php
        class Greetings
        {
           public static function welcome()
           {
            echo "Intro of static method";
           }

           public function __construct()
           {
               self :: welcome();            
           }
        }
        new greeting();
        ?>
-EXAMPLE 3:---> 

    - Static methods can also be called from methods in other classes.

    - Static method should be public.
      
      <?php
      class X 
      {
        public static function welcome()
        {
            echo " Welcome to static world!";
        }
      }

      class Y
      {
        public function message()
        {
            X::welcome();
        }
      }
      $obj = new Y();
      echo $obj->message();
      ?>

- EXAMPLE 4---> 
           
        - To call static method from a child class,

        - use " parent " keyword inside childclass.
               ********
        - Static method can be public / protected.

        <?php
        class domain
        {
            protected static function getWebsiteName()
            {
                return "Wikepedia.com";
            }
        }
        class domainwiki extends domain
        {
            public $websitename;
            public function __construct()
            {
                $this-> websitename = parent::getWebsiteName();
            }
        }
        $domainwiki=new domainwiki;
        echo $domainwiki->websitename;
        ?>

