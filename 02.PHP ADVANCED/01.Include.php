// INSERT the contet from one php file to ANOTHER.
// Before the server executes it.
// Using include and require statements.

require ---> When error comes, it produces a fatal error and stop the script.
include ---> Only produce a warning and the script will continue.

SYNTAX:-
      include 'filename'
            or
      require 'filename'
      
// Including files saves alot of work.

// Assume the code has a footer file called footer.php like:--
    
                 <?php
                 echo "<p>Copyright &copy;2001 - " . date("Y") . "www.wikipedia.org/</p>";
                 ?>
      // To include a footer file in a page, use "include" .
                 <html> 
                  <body>
                        <h1>Welcome to main page</h1>
                        <p>Knowledge is powerful.</p>
                        <p>Keep searching questions.</p>
                        <?php include 'footer.php';?>
                  </body>
                 </html>
      
___________________________________________________________________________________________________________________________
INCLUDE V/S require

// Require is also used to add file to php code.

// When using INCLUDE
     <html>
     <body>

     <h1>Welcome to my home page!</h1>
     <?php include 'noFileExists.php'; // no file is added
     echo "I have a $color $car.";
     ?>

     </body>
     </html>  // output :-- Welcome to my home page!
                            I have a

// When using REQUIRE
        <html>
        <body>

        <h1>Welcome to my home page!</h1>
        <?php require 'noFileExists.php'; //no files added
        echo "I have a $color $car.";
        ?>

        </body>
        </html> // output:-- Welcome to my home page!
  // Programme stopped after getting error.



// REQUIRE -----> USE WHEN THE SPECIFIC FILE IS REQUIRED BY THE APPLICATION
// INCLUDE -----> USE WHEN FILE IS NOT REQUIRED AND APP SHOULD CONTINUE WHEN FILE IS NOT FOUND.