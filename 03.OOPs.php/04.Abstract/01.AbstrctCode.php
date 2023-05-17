<?php
// parent class
abstract class Car{
    public $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    abstract public function intro():string;
}
// child class
class Audi extends Car{
    public function intro(): string
    {
        return "My name is $this->name, I am a car!";
    }
}
class BMW extends Car{
    public function intro(): string
    {
        return "My name is $this->name, I am a car!";
    }
}
class Ford extends Car{
    public function intro(): string
    {
        return "My name is $this->name, I am a car!";
    }
}
// create objects from child class
$audi=new Audi("A4");
echo $audi->intro();
echo "<br>";

$bmw = new BMW("BMW");
echo $bmw->intro();
echo "<br>";

$ford = new Ford("FORD");
echo $ford->intro();
?>

OUTPUT:---> 
// My name is A4, I am a car!
// My name is BMW, I am a car!
// My name is FORD, I am a car!
________________________________________________________________________________________________________________________
EXAMPLE 2:----> 
<?php
abstract class ParentClass{
    // Abstract method with an argument
    abstract protected function prefixName($name);
}
// child class
class childClass extends ParentClass{
    public function prefixName($name){
        if ($name=="Jane Doe") {
            $prefix = "Miss.";
        }elseif($name=="Damon Salvatore"){
            $prefix = "Mr.";
        }else{
            $prefix = "";
        }
        return "{$prefix}{$name}";
    }
}

$class = new childClass;
echo $class->prefixName("Jane Doe");
echo "<br>";
echo $class->prefixName("Damon Salvatore");
?>

OUTPUT:---> 
// Miss.Jane Doe
// Mr.Damon Salvatore
________________________________________________________________________________________________________________________
EXAMPLE 3:----> 

<?php
abstract class ParentClasses{
    // Abstract method with an argument
    abstract protected function prefixName($name);
}
// child class
class ChildClasses extends ParentClass{
   // The child class may define optional args that are not in the parents abstract method
   public function prefixName($name, $seperator= ".", $greet="Dear "){
    if ($name=="Jane Doe") {
        $prefix = "Miss.";
    }elseif($name=="Damon Salvatore"){ 
        $prefix = "Mr.";
    }else{
        $prefix = "";
    }
    return "{$greet}{$prefix}{$seperator}{$name}";
   }
}
$class = new ChildClass;
echo $class->prefixName("Jane Doe");
echo "<br>";
echo $class->prefixName("Damon Salvatore");
?>

OUTPUT
// Dear Miss..Jane Doe
// Dear Mr..Damon Salvatore