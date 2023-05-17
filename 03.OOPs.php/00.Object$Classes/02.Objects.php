EXAMPLE 1 ---> 
         <?php
         class test{
            private $x = "Hello PHP aspirers";
            public function display(){
                echo $this->x;
            }
         }
         $obj = new test();
         $obj -> display();
         ?> // output: Hello PHP aspirers
____________________________________________________________________________________________________________________________
EXAMPLE 2 ---> 
    <?php
    class teach{
        private $z = "Welcome to PHP";
        public function display(){
            echo $this->z;
        }

    }
    $obj = new teach();
    $obj -> display();
    var_dump($obj); // output:- Welcome to PHPobject(teach)#1 (1) { ["z":"teach":private]=> string(14) "Welcome to PHP" }
    ?>
    