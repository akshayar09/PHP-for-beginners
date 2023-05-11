2 TYPES OF filter_list
***************************

//  VALIDATINF DATA = Determine if the data is in proper form.
//  SANITIZING DATA = Remove any illegal char from data.

FILTER EXTENSION 
*****************
// Used to validate and sanitize external input.
// For checking user input , make data validation easier and quicker.
// filter_list() ---> 
              Used to list what the php filter offers.

EXAMPLE:--> 
     <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
        <?php
        foreach (filter_list()as $id =>$filter){
            echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
        }
        ?>
     </table>

// outputs
Filter Name	   |    Filter ID
_______________|___________________
int	               257
boolean	           258
float	           259
validate_regexp	   272
validate_domain	   277
validate_url	   273
validate_email	   274
validate_ip	       275
validate_mac	   276
string	           513
stripped	       513
encoded	           514
special_chars	   515
full_special_chars	522
unsafe_raw	       516
email	           517
url	               518
number_int	       519
number_float	   520
magic_quotes	   521
callback	       1024


___________________________________________________________________________________________________________________________
// Web app reieve external input such as 
 1) user input from a form.
 2) Cookies
 3) Web service data
 4) Server variables 
 5) Database query results 

// One shuould always validate exernal data 
___________________________________________________________________________________________________________________________
filter_var()  --> 
              Both validate and sanitize data.
              Filter a single var with a specified filter.
              It takes 2 pieces of data:
                  1) Variable want to check 
                  2) Type of check to use 
___________________________________________________________________________________________________________________________
SANITIZE A STRING 
******************


EXAMPLE:---> 
     <?php
     $str = "<h1>Hello World</h1>";
     $newstr = filter_var($str,FILTER_SANITIZE_STRING); // Deprecated as of PHP 8.1.0, use htmlspecialchars() instead.
     echo $newstr;
     ?>
// FILTER_SANITIZE_STRING --->  Deprecated as of PHP 8.1.0, use htmlspecialchars() instead.


<!-- 
<?php
$str = "<h1>Hello World!</h1>";
$newstr = htmlspecialchars($str);
echo $newstr;
?> -->


___________________________________________________________________________________________________________________________
VALIDATE AN INTEGER
********************
EXAMPLE:--> 
         <?php 
         $int = 249; // If it is 0 => "Integer is not valid" will be o/p. 

         if(!filter_var($int,FILTER_VALIDATE_INT)===false){
            echo("Integer is valid");
         }else{
            echo("Integer is not valid");
         }
         ?>
EXAMPLE 2---> 
          <?php
          $int = 0;        // Here 0 will be valid.
          if ( filter_var($int,FILTER_VALIDATE_INT)===0|| !filter_var($int,FILTER_VALIDATE_INT)===false){
            echo("Integer is valid");
          }else{
            echo("Integer is not valid");
          }
          ?>
___________________________________________________________________________________________________________________________
VALIDATE AN IP ADDRESS 
**********************
EXAMPLE:---> 
           <?php
           $ipaddress = "127.00.00.01";

           if (!filter_var($ipaddress,FILTER_VALIDATE_IP)===false) {
            echo ("$ipaddress is a valid IP address"); 
           }else{
            echo ("$ipaddress is not a valid IP address");
           }
           ?>
___________________________________________________________________________________________________________________________
SANITIZE AND VALIDATE EMAIL ADDRESS.
*************************************

EXAMPLE:---> 
           <?php
           $emailid = "janedoe00@ex.com";

           // Remove all illegal char from mail id.
           $emailid = filter_var($emailid,FILTER_SANITIZE_EMAIL);

           // Validate mail id
           if(!filter_var($emailid,FILTER_VALIDATE_EMAIL)===false){
            echo ("$emailid is a valid email address");
           }else{
            echo ("$emailid is not a valid email address");
           }
           ?>

___________________________________________________________________________________________________________________________
SANITIZE AND VALIDATE URL 
**************************
EXAMPLE:---> 
           <?php
           $url = "https://www.wikipedia.com";

           // Remove all illegal char from a url.
           $url = filter_var($url,FILTER_SANITIZE_URL);

           // Validate the url
           if(!filter_var($url,FILTER_VALIDATE_URL)===false){
            echo ("$url is a valid URL");
           }else{
            echo ("$url is not a valid URL");
           }
           ?>
___________________________________________________________________________________________________________________________

