PHP supports:---

* STRING
------------------------------------------------------------------------------------------------------------------------
     Sequence of characters 

     Inside quotes

* INTEGER
------------------------------------------------------------------------------------------------------------------------
  Atleast one digit.

  No decimal ponts.

  Either +ve or -ve.


* FLOAT (floating point numbers - also called double)
------------------------------------------------------------------------------------------------------------------------
  No. with decimal point or exp form.

  
* BOOLEAN
------------------------------------------------------------------------------------------------------------------------
  TRUE OR FALSE




* ARRAY
------------------------------------------------------------------------------------------------------------------------
  
<?php
$Languages = array("Golang","Python","java");
var_dump($Languages);
?>

// var_dump() function returns the data type and value

* OBJECT
------------------------------------------------------------------------------------------------------------------------
Class is a template of OBJECTS, and object is an instance of a class.

<?php
class DOGS {
  public $color;
  public $breed;
  public function __construct($color, $breed) {
    $this->color = $color;
    $this->breed = $breed;
  }
  public function message() {
    return "My dog is a " . $this->color . " " . $this->breed . "!";
  }
}

$myDog = new DOGS("black", "German sheperd");
echo $myDog -> message();
echo "<br>";
$myDog = new DOGS("brown", "Beagle");
echo $myDog -> message();
?>



* NULL
------------------------------------------------------------------------------------------------------------------------
Can only have null value.

No value is assigned.

<?php
$a = "Hello world!";
$a = null;
var_dump($a);
?>
* Resource
------------------------------------------------------------------------------------------------------------------------
A resource is a special variable, holding a reference to an external resource. 

Resources are created and used by special functions.