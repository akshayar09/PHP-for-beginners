- When the object is destructed / script is stopped / exited ---> Call destructor.
- While creating a "__destruct()" func:
                   PHP will automatically call this func at the end of the scipt.
EXAMPLE:---> 
      <?php
      class Car{
        public $name;
        public $color;

        function __construct($name,$color)
        {
         $this->name=$name;   
         $this->color=$color;   
        }
        function __destruct()
        {
            echo "The car is {$this->name} & the color is {$this->color}";  // OUTPUT: The car is AUDI & the color is black.
        }
      }
      $my_car=new Car("AUDI","black");
      ?>
