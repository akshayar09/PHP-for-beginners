
***  A varibale starts with  $ sign,followed by name of variable.


***  Variable name in case sensitive.


*** We dont have to tell PHP which data type the variable is.


EX:
1) <?php
  $txt = "Hello world";
  $x = 5;
  $y = 12.4;
  ?>

______________________________________________
*********************************************

*** ECHO  statement is used to show output ,same as PRINT

EX:
1) <?php
   $txt = "hello world";
   echo "Lets start PHP";
   ?>

         &

2) <?php 
   $txt = "PHP";
   echo "I love " . $txt . "!";
   ?>

3) <?php 
   $a = 10;
   $b = 12;
   echo $a + $b;
   ?>

*********************************************************************************************************************
                                      VARIABLE SCOPES
******************************************************************************************************************

* LOCAL
* GLOBAL
* STATIC


1)GLOBAL AND LOCAL SCOPES


<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function.

2) GLOBAL KEY WORD

It is ysed to access a global variable from a func.

EX:
<?php
$x = 5;
$y = 10;

function phpStudy() {
  global $x, $y;
  $y = $x + $y;
}

phpStudy();
echo $y; // outputs 15
?>


3) STATIC KEYWORD

If we want a local variable to be stored and not deleted even after the execution,we use STATIC.

EX:
<?php
function phpStudy() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
myTest();
myTest();
?>