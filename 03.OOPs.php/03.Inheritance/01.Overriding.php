- Method overriding allows a child class to provide a specific implementation
     of a method already in parent class.

- To override a method ,one should redefine the method in child class
     with same name,parameters and return type.
     
- Method in parent class --> OVERRIDDEN METHOD

- Method in child class ---> OVERRIDING METHOD 

- If an OBJECT of PARENT CLASS invokes the METHOD ----> php will execute OVERRIDDEN METHOD.

- If an OBJECT of CHILD CLASS invokes the METHOD  ----> php will execute OVERRIDING METHOD. 


 
                                CODING EXAMPLE 
                            __________________________
- Define Robot class
- 1 public method greet()
- Android class that inherits Robot class.

                   <?php
                   class Robot{
                    public function greet()
                    {
                        return "Hello people";
                    }
                   }
                   class Android extends Robot
                   {

                   }
                   ?>
- While calling greet() method via android instance, PHP call the method of Robot class.
                   <?php
                   class Robot{
                    public function greet()
                    {
                        return "Hello people";
                    }
                   }
                   class Android extends Robot
                   {
                     public function greet()
                     {
                        return "Hi Android";
                     }
                   }

                   $robot = new Robot();

                   echo $robot->greet(); // Hello people

                   $android = new Android();

                   echo $android->greet(); // Hi Android
                   ?>

- CALL THE OVERRIDDEN METHOD IN THE OVERRIDING METHOD
                   <?php
                   class Robot{
                    public function greet()
                    {
                        return "Hello people";
                    }
                   }
                   class Android extends Robot
                   {
                     public function greet()
                     {
                        // cant use $this keyword 
                        // $greeting = $this->greet();

                        // call it as parent
                        $greeting = parent::greet();
                        
                        return $greeting ."from Android.";
                     }
                   }

                   $robot = new Robot();

                   echo $robot->greet(); // Hello people

                   $android = new Android();

                   echo $android->greet(); // Hi Android
                   ?>

