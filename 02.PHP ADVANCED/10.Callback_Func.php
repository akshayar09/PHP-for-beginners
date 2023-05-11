// A func which  passes as an args into another func.
// An existing func can be used as callback func.
// Pass a string cotaining name of func as the arg of another func --> to use a func as callback func.
EXAMPLE:---> 
       <?php
       // Make a func passing with 1 argument item
       function test_callback($item){
        return strlen($item);
       }
       $strings = ["husky", "beagle", "pomeranian"];
       // an array containing all the elements of arr1 after applying the callback function to each one.
       $lengths = array_map("test_callback", $strings);
       print_r($lengths);
       ?>
       // outputs Array ( [0] => 5 [1] => 6 [2] => 10 )

EXAMPLE2---> 
       <?php
       $strings = ["apple","orange","banana","coconut"];
       $lengths = array_map(function($item){return strlen($item);}, $strings);
       print_r($lengths);
       ?>
    // Using anonymous func as a callback func.

________________________________________________________________________________________________________________________
CALLBACKS IN USER DEFINED FUNCTIONS
************************************
// It can also take callback func as args.
// To use calback inside user - defined func / method call it by adding parentheses to the variable and pass args.
EXAMPLE:---> 
        <?php
        function exclaim($str){
            return $str . "!";
        }
        function ask($str){
            return $str . "?";
        }
        function printFormatted($str,$format){
            // Calling the $format callback function
            echo $format($str);
        }
        // Pass "exclaim" and 'ask'  as callback func to printFormatted()
        printFormatted("Hello World","exclaim");  
        printFormatted("Hello World","ask");   // output  Hello world! Hello world?
        ?>