// An array stores multiple values in one single variable.
//SYNTAX
   array();

EX:
   <?php
   $dogs = array("husky", "Beagle" , "Pomeranian");
   echo "I have a " . $dogs[1] . "&" . $dogs[2]. ".";  // OUTPUTS  I have a Beagle&Pomeranian.
   ?>

// Length of an array --------------> count()  func.
EX:
   <?php
   $dogs = array("husky", "Beagle" , "Pomeranian");
   echo count($dogs);  // OUTPUTS  3
   ?>



                                   TYPES OF ARRAYS
*************************************************************************************************************
1)INDEXED ARRAYS -----> Array with a numeric index.
2)ASSOCIATIVE ARRAYS -----> Arrays with named keys.
3)MULTI-DIMENSIONAL ARRAYS -----> Arrays containing one or more arrays.


INDEXED ARRAYS
******************

// Index starts with 0.
// Index can be assigned manually also.

EX:
   <?php
   $dogs = array("husky", "Beagle" , "Pomeranian");
   // $dogs[0] = "husky"
   // $dogs[1] = "Beagle"
   // $dogs[2] = "Pomeranian"
   echo "I have a " . $dogs[1] . "&" . $dogs[2]. ".";  // OUTPUTS  I have a Beagle&Pomeranian.
   ?>


//Loop through indexed array.

        <?php
        $cars = array("Volvo", "BMW", "Toyota");
        $arrlength = count($cars);

        for($x = 0; $x < $arrlength; $x++) {
               echo $cars[$x];
               echo "<br>";
         }
        ?>




ASSOCIATIVE ARRAYS
************************
EX:
    <?php
    // $age['Peter'] = "35";
    // $age['Ben'] = "37";
    // $age['Joe'] = "43";
    $age = array("Eva"=>"25", "Emma"=>"32", "Louis"=>"33");
    echo "Eva is " . $age['Eva'] . " years old.";
    ?>

// Loops through associative arrays.

  EX:
      <?php
      $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

      foreach($age as $x => $x_value) {
           echo "Key=" . $x . ", Value=" . $x_value;
           echo "<br>";
      }
      ?>


MULTI-DIMENSIONAL ARRAYS
**************************
// Arrays containing one or more arrays.
// Dimension of an array means the number of indices you need to select an element.
