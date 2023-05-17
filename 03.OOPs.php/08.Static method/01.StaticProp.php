- Static property ca be called directly ie; without creating an instance of a class.

- They are declared with the " static " keyword.
                              ********
- SYNTAX:----> 
        <?php
        class ClassName
        {
            public static $staticProp = "Wikepedia.com";
        }
        ?>
- To access a static property use the CLASS NAME :: PROPERTY NAME.

- SYNTAX:----> 
       <?php
       // .....

       ClassName::$staticProp;
       ?>

- EXAMPLE:----> 
       <?php
       class pi
       {
        public static $value = 3.141;
       }
       // get static property
       echo pi::$value;
       ?>

- EXAMPLE 2---> 
    - Class can have both STATIC & NON - STATIC properties.

    - STATIC PROPERTY can be accessed from  a METHOD in the sameCLASS using self keyword and :: . 
                                                                            *******************
            <?php
            class pi 
            {
                public static $value = 3.1415;
                public function staticValue()
                {
                    return self :: $value;
                }
            }
            $pi = new pi();
            echo $pi -> staticValue();
            ?>

- EXAMPLE 3----> 
            <?php
            class pi
            {
                public static $value = 3.1415;
            }
            class a extends pi
            {
                public function aStatic()
                {
                    return parent :: $value;
                }
            }

            // Get value of static property directly via child class
            echo a :: $value; // 3.1415
            echo '<br>';

            // or get value of static property via aStatic() method
            $a = new a();
            echo $a -> aStatic();  // 3.1415
            ?>

________________________________________________________________________________________________________________________
                                                   |
$this	                                           |                     self
___________________________________________________|____________________________________________________________________
- Represents an instance of the class or object	   |         Represents a class
- Always begin with a dollar ($) sign	           |         Never begin with a dollar($) sign
- Is followed by the object operator (->)	       |         Is followed by the :: operator
- The property name after the object operator (->) |         The static property name after the :: operator always has the dollar ($) sign. 
      does not have the dollar ($) sign,           |                 
       e.g., $this->property.	
