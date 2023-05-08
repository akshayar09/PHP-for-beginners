                                                       OPERATORS
***********************************************************************************************************************

* Arithmetic OPERATORS
* Logical or relational OPERATORS
* Assignment OPERATORS
* Comparison OPERATORS
* Array OPERATORS
* String OPERATORS
* Conditional or Ternary OPERATORS
* Spaceship OPERATORS
* Increment/Decrement OPERATORS


                                           ARITHMETIC OPERATORS
************************************************************************************************************************

1) Addition---> +
   ex:
     $x + $y 

2)Subtraction---> -
   ex:
     $x - $y 

3)Multiplication---> *
   ex:
     $x * $y 

4)Division---> /
   ex:
     $x / $y 

5) Modulus---> %
   ex:
     $x % $y 

6)Exponentiation---> **
   ex:
     $x ** $y 

    
                                               ASSIGNMENT OPERATORS
************************************************************************************************************************
1) a = y 

2)a += b
  ex:
    <!DOCTYPE html>
    <html>
    <body>

    <?php
    $a = 20;  
    $a += 100;

    echo $a; //outputs 120
    ?>  

    </body>
    </html>

3) a -= b
   means: x = x - y
   ex:
   <!DOCTYPE html>
   <html>
   <body>

   <?php
   $a = 20;  
   $a -= 10;

   echo $a; //outputs 10
   ?>  

    </body>
   </html>

4) a *= b
   means: x = x * y

5) a/=b
   means: x = x/y

6)a %= b
  means: x = x % y


                                                COMPARISON OPERATORS
************************************************************************************************************************

1) ==      -----> EQUAL      -----> $x == $y   // Returns true if $x is equal to $y
2) ===     -----> IDENTICAL  -----> $x === $y  // Returns true if $x is equal to $y, and they are of the same type
3) !=      -----> NOT EQUAL  -----> $x != $y   // Returns true if $x is not equal to $y
4) <>      -----> NOT EQUAL  -----> $a<>$b     // Returns true if $a is not equal to $b 
5) !==     -----> NOT IDENTICAL---> $A!==$B    // Returns true if $a is not equal to $b,or not same type.
6) >       -----> GREATER THAN 
7) >=      -----> GREATER THAN OR EQUAL
8) <=      -----> LESS THAN OR EQUAL
9) <       ----->LESS THAN
10)<=>     ----->SPACESHIP   -----> $x <=> $y	// Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y.
EX:
    <!DOCTYPE html>
    <html>
    <body>

    <?php
    $x = 5;  
    $y = 10;

    echo ($x <=> $y); // returns -1 because $x is less than $y
    echo "<br>";

    $x = 10;  
    $y = 10;

    echo ($x <=> $y); // returns 0 because values are equal
    echo "<br>";

    $x = 15;  
    $y = 10;

    echo ($x <=> $y); // returns +1 because $x is greater than $y
    ?>  

    </body>
    </html>

                                            PHP INCREMENT / DECREMENT OPERATORS
************************************************************************************************************************
//To increment and decrement a variables value.

1) ++$a     ----->PRE - INCREMENT  -----> increment a by one then return a.
2) --$a     ----->POST - DECREMENT -----> decrement a by one and then eturn a.
3) $a++     ----->POST - INCREMENT -----> Returns $a and then increment by one.
4) $a--     ----->PRE - DECREMENT -----> Returns $a and then decrement by one.


                                                PHP LOGICAL OPERATORS
************************************************************************************************************************
//To perform logical operations on two values.
1) $a && $b  ----->AND  -----> TRUE if both are true.
2) $a || $b  ----->OR   -----> TRUE if either is true.
   ex:
   <!DOCTYPE html>
   <html>
   <body>

   <?php
   $x = 100;  
   $y = 50;

   if ($x == 100 || $y == 80) {
      echo "Hello world!";  // Outputs Hello World
   }
   ?>  

   </body>
   </html>

3) !$b  ----->NOT   -----> TRUE if !$b  is not true.

4) $a and $b ------> AND  ------>TRUE if both are true.
5) $a or $b ------> OR   ------>TRUE if either is true.
6) $a xor $b ----->XOR -----> TRUE if either one is true,but not both.


                                             PHP STRING OPERATORS
************************************************************************************************************************
//To perform string operations on two values.

1) . ---->CONCATENATION ----->$txt1 . $txt2
   
   ex:
   <!DOCTYPE html>
   <html>
   <body>

   <?php
   $txt1 = "Hello";
   $txt2 = " world!";
   echo $txt1 . $txt2; // outputs Hello World!
   ?>  

   </body>
   </html>

2) .= ---->CONCATENATION ASSIGNMENT ----->$txt1 .= $txt2 

  EX:
    <!DOCTYPE html>
    <html>
    <body>

    <?php
    $txt1 = "Hello";
    $txt2 = " PHP"  ;
    $txt3 = " world!";
    $txt1 .= $txt2;
    echo $txt1;           // OUTPUTS Hello PHP
    ?>  

    </body>
    </html>


                                                   ARRAY OPERATORS
************************************************************************************************************************
// COMPARE ARRAYS
1) $A + $B   ---> UNION 
2) $A == $B  ---> EQUALITY  ---->returns true if both have same key value pairs.
3) $A != $B  ---> INEQUALITY ---->returns true if both have different key value pairs.
4) $A === $B ---> IDENTITY   ---->TRUE if both have same key value pairs in same order and type.
5) $A !== $B ---> NOT IDENTITY ---->TRUE if both are not identical.
6) $A <>$B   ---> INEQUALITY  -----> >returns true if both have different key value pairs.


EX:
   <!DOCTYPE html>
   <html>
   <body>

   <?php
   $x = array("a" => "red", "b" => "green");  
   $y = array("c" => "blue", "d" => "yellow");  

   print_r($x + $y); // OUTPUTS   Array ( [a] => red [b] => green [c] => blue [d] => yellow )
   var_dump($x == $y);// OUTPUTS  bool(false)
   var_dump($x === $y); // OUTPUTS  bool(false)
   var_dump($x != $y); // OUTPUTS   bool(true)
   var_dump($x <> $y); //OUTPUTS    bool(true)
   var_dump($x !== $y); //OUTPUTS   bool(true)
   ?>  

   </body>
   </html>

                                    CONDITIONAL ASSIGNMENT OPERATORS
*********************************************************************************************************************
// SET A VALUE DEPENDING ON CONDITIONS

1) ?:  ----->TERNARY  
   EX:
   <!DOCTYPE html>
   <html>
   <body>

   <?php
       // if empty($user) = TRUE, set $status = "anonymous"
       echo $status = (empty($user)) ? "anonymous" : "logged in";
       echo("<br>");

       $user = "John Doe";
       // if empty($user) = FALSE, set $status = "logged in"
      echo $status = (empty($user)) ? "anonymous" : "logged in";
    ?>  

    </body>
    </html> 

2) ??  -----> NULL COALESCING
   EX:
   <!DOCTYPE html>
   <html>
   <body>

   <?php
       // variable $user is the value of $_GET['user']
       // and 'anonymous' if it does not exist
       echo $user = $_GET["user"] ?? "anonymous";
       echo("<br>");
  
       // variable $color is "red" if $color does not exist or is null
       echo $color = $color ?? "red";
   ?>  

   </body>
   </html>




