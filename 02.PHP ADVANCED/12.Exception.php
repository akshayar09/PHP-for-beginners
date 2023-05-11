// Unexpected program result that can be handled by the prgrm.
// try   --> represents a block of code in which exceptions can arise.
// catch --> represents a block of code that will be executed when a particular error has thrown.
// throw --> Use to throw an exception.
             Used to list the exceptions that func throws, but cant handle itself.
// finally --> Used in place of catch block after a catch block basically it is put for cleanup activity in PHP code.
________________________________________________________________________________________________________________________
EXAMPLE:--> 
       <?php
       function divide($divident, $divisor){
        if($divisor==0){
            throw new Exception("Division by zero is not possible.");
        }
        return $divident / $divisor;
       }
       echo divide(10,0);
       ?>

       ERROR:--> error of this prgrm.
            Fatal error: Uncaught Exception: Division by zero in C:\webfolder\test.php:4
            Stack trace: #0 C:\htdocs\error.php(9):
            divide(10, 0) #1 {main} thrown in C:\htdocs\error.php on line 4


______________________________________________________________________________________________________________________
TRY...CATCH STATEMENT
*********************
// Statement to catch exceptions and continue process. 

SYNTAX:---> 
      try{
        // Code that can throw exception
      }catch(Exception $e){
        // Code that should run when an exception is caught.
      }

EXAMPLE:---> 
      <?php
      function divide($divident, $divisor){
        if($divisor == 0){
            throw new Exception("Division by zero is not possible.");
        }
        return $dividend / $divisor;
      }
      try{
        echo divide(10,0);
      }catch(Exception $e){
        echo "Unable to divide.";  // Output: Unable to divide.
      }
      ?>

_________________________________________________________________________________________________________________________
TRY...CATCH....FINALLY STATEMENT
********************************
// Code in the "finally" block will always run regardless of what exception is caught.
// If "finally" is there, "catch" block is optional.

SYNTAX:--->
     try{
        // Code that thorw exception
     }catch(Exception $e){
        // Code to run when exception is caught.
     }finally{
        // Code that always run regardless of if an error is there.
     }

EXAMPLE:---> 
         <?php
         function divide($divident,$divisor){
            if($divisor == 0){
                throw new Exception("Division by zero is not possible.");
            }
            return $dividend / $divisor;
         }
         try{
            echo divide(10,0);
         }catch (Exception $e){
            echo "Unable to divide."; 
         }finally {
            echo "Process is completed.";  // Output: Unable to divide.Process is completed.
         }
         ?>
   
_________________________________________________________________________________________________________________________
EXCEPTION OBJECT 
********************************
// Contains info about error / unexpected behaviour that func encountered.

SYNTAX:--> 
       new Exception(message, code, previous)
    
    PARAMETER VALUES
    ****************
       // message--> OPTIONAL. A string describing why the exception was thrown.
       // code ----> OPTIONAL. An int that is used to easily distinguish the exception from others of same type.
       // previous ----> OPTIONAL. If this exception is thrown in a catch block of other exception,
                                  it is recommended to pass that exception to this parameter.
                        
    METHODS
    *******
        // getMessage()  ---> Returns a string describing why the exception was thrown.
        // getPrevious() ---> If this exception was triggered by another one,
                                   this method returns the previous exception.
                                   If not , then it returns null.
        // getode()     ----> Returns the exception code.
        // getFile      ----> Returns the full path of file in which exception was thrown.
        // getLine      ----> Returns the line no. of the line of code which threw exception.

EXAMPLE:---> 
         <?php
         function divides($dividends,$divisors){
            if($divisors ==0){
                throw new Exception("Division by zero",1);
            }return $dividends/$divisors;
         }

         try{
            echo divide(28,0);
         }catch(Exception $ex){
            $code = $ex->getCode();
            $message=$ex->getMessage();
            $file=$ex->getFile();
            $line=$ex->getLine();
            echo "Exception thrown in $file on lie $line:[Code $code] $message";
         }
         ?>
         // output:- Exception thrown in /desktop/htdocs/exceptn.php on line 8: [Code 1] Division by zero
                                



