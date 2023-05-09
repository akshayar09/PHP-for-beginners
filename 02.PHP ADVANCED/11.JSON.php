// Javascript Object Notation
// Syntax for storing and exchanging data.

// Text based format.
________________________________________________________________________________________________________________________
// Php has built in func to handle json.
  1) json_encode()
  2) json_decode()
________________________________________________________________________________________________________________________
json_encode()
**************
// Encodes the given value into a JSON string.
EXAMPLE:---> 
          <?php
          $age = array("Eva"=>23, "Louis"=>31, "Harry"=>31, "Aira"=>27);

          echo json_encode($age);  // output:-- {"Eva":23,"Louis":31,"Harry":31, "Aira":27} 
          ?>


EXAMPLE:----> Decode a JSON object into a PHP object.
           <?php
           $jsonobj = '{"Eva":23,"Louis":31,"Harry":31}';

           var_dump(json_decode($jsonobj));   // output:--    object(stdClass)#1 (3) { ["Eva"]=> int(23) ["Louis"]=> int(31) ["Harry"]=> int(31) }
           ?>

    // Returns an object by default.
    // Has a 2nd parameter ie; when set to true decoded to associative arrays.

EXAMPLE:---> 
        <?php
        $jsonobj = '{"Eva":21,"Louis":31,"Harry":31}';

        var_dump(json_decode($jsonobj, true)); // OUTPUT :-- array(3) { ["Eva"]=> int(21) ["Louis"]=> int(31) ["Harry"]=> int(31) }
        ?>
________________________________________________________________________________________________________________________
ACCESSING DECODED VALUES
****************************
EXAMPLE:--> 
        <?php
        $jsonobj = '{"Eva":21,"Louis":31,"Harry":31}';

        //var_dump(json_decode($jsonobj/* , true */)); // OUTPUT :-- array(3) { ["Eva"]=> int(21) ["Louis"]=> int(31) ["Harry"]=> int(31) }
        $obj = json_decode($jsonobj);
        echo $obj -> Eva; // output : 21
        echo $obj -> Louis;// output: 31
        echo $obj -> Harry;// output: 31
        ?>

EXAMPLE:----> 
        <?php
        $jsonobj = '{"Eva":21,"Louis":31,"Harry":31}';
        $arr = json_decode($jsonobj,true);
        echo $arr["Eva"]; // 21
        echo $arr["Louis"];// 31
        echo $arr["Harry"];// 31
        ?>
________________________________________________________________________________________________________________________
LOOP THROUGH VALUES
****************************
// foreach()
EXAMPLE:---> 
        <?php
        $jsonobj = '{"Eva":21,"Louis":31,"Harry":31}';
        $obj = json_decode($jsonobj);
        foreach($obj as $key => $value){
            echo $key . "=>" . $value . "<br>";    // output:--->   Eva => 21    Louis=> 31  Harry=>31
        }
        ?>

EXAMPLE:----> 
        <?php
        $jsonobj = '{"Eva":21,"Louis":31,"Harry":31}';
        $arr = json_decode($jsonobj,true);
        foreach($arr as $key => $value){
            echo $key . "=>" . $value . "<br>";    // output:--->   Eva => 21    Louis=> 31  Harry=>31
        }
        ?>


________________________________________________________________________________________________________________________
json_encode()
**************
EXAMPLE:---> 
       <?php
       $cars = array("BMW","AUDI","FORD");
       echo json_encode($cars);  // output:-- ["BMW","AUDI","FORD"]
       ?>

