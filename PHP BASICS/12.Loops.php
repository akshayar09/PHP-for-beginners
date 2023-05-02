1) While loop
2) do ...while 
3) for loop 
4) foreach 




                                             WHILE LOOP 
****************************************************************************************************************
// Loops through a block of code as long as the specified condition is true.
//SYNTAX:
      while(condition is true){
        code to be executed
      }

      EX:
      <?php

          // PHP code to illustrate while loops
      $num = 2;

    while ($num < 12) {
	      $num += 2;
	      echo $num, "\n"; // OUTPUTS  4  6  8  10  12
      }

    ?>


                                             DO ... WHILE LOOP 
****************************************************************************************************************
// Always execute the code once, then check the condition, and repear the loop while conidtion is true.
//SYNTAX: 
    do{
        code to be executed;
    }while (condition is true);

ex:
   <?php
   $x = 1;

   do {
     echo "The number is: $x <br>";
     $x++;
   } while ($x <= 5);
   ?>

NOTE: The loop will execute at least once , even if the condition is false.
      Bcz condition is tested only after execution.

                                           
                                               FOR LOOP 
****************************************************************************************************************
// Loops through a block of code in a specified no. of times.
//SYNTAX:
     for (init counter; test counter; increment counter){
        code to be executed for each iteration;
     } // init counter ---> initialising value
       // test counter ---> test criteria
       // increment counter ---> Loop counter value 

EX:
     <?php
     for ($x = 0; $x <= 100; $x+=10) {
        echo "The number is: $x <br>";
     }
     ?>

                                               FOREACH LOOP 
****************************************************************************************************************
// Works only on arrays.
// Used to loop through each key / value pair.
//SYNTAX:
    foreach($array as $value){
        code to be executed;
    }

EX:
     <?php
     $colors = array("red", "green", "blue", "yellow");

     foreach ($colors as $value) {
          echo "$value <br>";       // OUTPUTS red  greem blue  yellow
     }
     ?>



                                          BREAK AND CONTINUE
*********************************************************************************************************
// Break can be used to jump out of loops like in switch case.
EX:
   <?php
   for ($x = 0; $x < 10; $x++) {
   if ($x == 4) {
       break;
    }
      echo "The number is: $x <br>";
   }
   ?>

// Continue statement breaks one interation in loop.
// If a specified condition occurs.
// And continues with the loop.
ex:
   <?php
   for ($x = 0; $x < 10; $x++) {
       if ($x == 4) {
          continue;
       }
       echo "The number is: $x <br>";  // skips 4 // OUTPUTS 0 1 2 3 5 6 7 8 9 10
   }
   ?>