- Interface allows to specify a contract that a class must implement.
- To define an interface --> Use interface keyword.

SYNTAX:---> 
    <?php
    interface FirstInterface
    {
        // code to implement...
    }
    ?>

- An interface consist of method that have no implementaion.

- Means ,all methods of interface are abstract methods.

- Interface can also includes constants.

Like:--> 
   <?php
   interface FirstInterfaces
   {
    const PI = 3.14;
    public function methodName();
   }
   ?>

- Methods in interface should be public. 
 
- While defining a child class that reuse properties and methods of another class, 
   the child class extends the parent class.

- A class can inherit from one class oly.

- But can implement multiple interfaces. 

- To define a class that implements an interface, use "implements" keyword.

EXAMPLE:--->  
      <?php
      interface MyIntrface
      {
        const CONSTANT_NAME = 4;

        public function methodName();
      }
      class Myclass implements MyIntrface
      {
        public function methodName()
        {
            // code to be executed......
        }
      }
      ?>


- When a class implements an interface ,it is a ---> CONCRETE CLASS

- CONCRETE CLASS needs to implement all the methods of the interface.

- Interface can extend another interface using "extends" keyword.

EXAMPLE:----> 
        <?php
         
        interface Readable
        {
            public function read();
        }

        interface Document extends Readable
        {
            public function print();
        }
        ?>



- By implementing INTERFACE 
        - Caller of OBJECT doesnt have to care about implementation of OJBECT'S  METHODs.

        - Only to care about OBJECT's INTERFACE.

        - So we can change the implementations without affecting the caller of interface.


- Interface allows unrelated classes to implement the same set of methods,
        - regardless of positions in class inheritance hierarchy.
    
- Enables to model multiple inheritence because a class can implement more than one interface.

-EXAMPLE:----> 
        1) First create an interface called Logger

        <?php
        interface Logger
        {
            public function log($message);
        }
         ?>


        2) Create a fileLogger class to write log messages.
        

        <?php
        interface Logger
        {
            public function log($message);
        }
        class fileLogger implements Logger
        {
            private $handle;

            private $logFile;

            public function __construct($filename, $mode = 'a')
            {
                $this->logFile=$logFile;
                // Open log file for append

                $this-> handle=fopen($filename,$mode)or die('Could not open the log file');
            }
            public function log($message)
            {
                $message=date('F j, Y, g:i a') . ':' . $message . "\n";
                fwrite($this->handle, $message);
            }
            public function __destruct()
            {
                if ($this->handle){
                    fclose($this->handle);
                }
            }
        }
        ?>

        3) Use the fileLogger 

        <?php
        $logger =  new fileLogger("./log.txt",'w');
        $logger->log('Php interface is shown here');
        ?>

        4) Add another logger that logs info to databse.

        <?php
        class DatabaseLogger implements Logger
        {
            public function log($message)
            {
                echo sprintf('Log %s to the database\n', $message);
            }
        }
        ?>


        5) Now here shows how to use multiple loggers at the sam etime using a single ILogger interface.

        <?php
        $loggers=[
            new fileLogger('./log.txt'),
            new DatabaseLogger()
        ];
        foreach($loggers as $logger){
            $logger->log('Log message');
        }
        ?>
        

        6) The full code

        <?php
        interface Logger
        {
            public function log($message);
        }
        class FileLogger implements Logger
        {
            private $handle;

            private $logFile;

            public function __construct($filename,$mode = 'a')
            {
                $this->logFile=$filename;

                // open log file for append
                $this->handle =fopen($filename,$mode)or die ('could not open the log file');

            }
            public function log($message)
            {
                $message = date('F j,Y,g:i a') . ":" . $message . "\n";
                fwrite($this->handle, $message);
            }

            public function __destruct()
            {
                if($this-> handle){
                    fclose($this->handle);
                }
            }
        }

        class DatabaseLogger implements Logger
        {
            public function log($message)
            {
                echo sprintf('Log %s to the database\n', $message);
            }
        }

        //example 1
        $logger = new FileLogger('./log.txt','w');
        $logger->log('PHP interface is awesome');
        ?>
