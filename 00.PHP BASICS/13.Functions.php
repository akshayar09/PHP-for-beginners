// There are a lot of built in func in php.
// We can create our own func.
// Func is a bloack of statement that can be used in the whole code many times.
// We should call the func to be executed.

//SYNTAX:
   function functionName(){         //function names are NOT CASE SENSITIVE.
    code to be executed;
   }

EX: 
    <?php
    function writeMsg() {
       echo "Hello world!";
    }

    writeMsg(); // call the function
    ?>

    
                                           FUNCTION ARGUMENTS
******************************************************************************************************************
// Argument is just like a variable.
// Specified after the func name inside parantheses.
EX:
   <?php
   function FirstName($fname, $year) {
        echo "$fname Nair. Born in $year <br>";
   }

   FirstName("Gayatri", "1997");
   FirstName("Akshaya", "1995");
   FirstName("Aparna", "1993");
   ?>  // outputs  Gayatri Nair.Born in 1997
                   Akshaya Nair.Born in 1995
                   Aparna Nair.Born in 1993


// Here we havent assigned any data types to these variables.
// Bcz PHP is a loosely typed language.

// Using " STRICT " declaration , we wil get a fatal error if the data types are mismatched.
          *********
// STRICT declaration forces things to be used in the intended way.

EX:
    <?php declare(strict_types=1); // strict requirement

    function addNumbers(int $a, int $b) {
       return $a + $b;
    }
    echo addNumbers(5, "5 days");
    // since strict is enabled and "5 days" is not an integer, an error will be thrown
    ?> // OUTPUTS  PHP Fatal error: Uncaught TypeError: Argument 2 passed to addNumbers() must be of the type integer, string given, .......

EX 2:
        <?php declare(strict_types=1); // strict requirement
        function setHeight(int $minheight = 50) {
               echo "The height is : $minheight <br>";
        }

        setHeight(350);
        setHeight(); // will use the default value of 50
        setHeight(135);
        setHeight(80);
        ?>


                                          PASSING ARGUMENTS BY REFERENCE
******************************************************************************************************************

// Arguments are usually passes by value.
// However, if you want to pass arguments by reference, you can use the & operator.
// 
EX:
   <?php
   function add_five(&$value) {
       $value += 5;
   }

   $num = 2;
   add_five($num);
   echo $num;
   ?>