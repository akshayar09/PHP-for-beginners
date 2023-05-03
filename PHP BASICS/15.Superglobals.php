// They are built in variables that are always available in all scopes.
//Superglobal variables

1) $GLOBALS
2) $_SERVER
3) $_GET
4) $_POST
5) $_COOKIE
6) $_REQUEST
7) $_FILES
8) $_ENV
9) $_SESSION

$GLOBALS
****************************************************************************
// It is used to access global variables from anywhere from the php script.
// Here all global variables are stored in an array calles $GLOBALS[index].
//index -----> Name of the variable.


EX:
   <?php
   $a = 10;
   $b = 20;

   function add(){
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
    }
    add();
    echo $z;
    ?>


$_SERVER
****************************************************************************
// It holds info about headers, script locations and paths.

Element/Code	                            |                      Description
____________________________________________|____________________________________________________________________
--------------------------------------------|---------------------------------------------------------------------
$_SERVER['PHP_SELF']	                    |  Returns the filename of the currently executing script
                                            |
$_SERVER['GATEWAY_INTERFACE']	            |  Returns the version of the Common Gateway Interface (CGI) the server is using
                                            |
$_SERVER['SERVER_ADDR']	                    |  Returns the IP address of the host server
                                            |
$_SERVER['SERVER_NAME']	                    | Returns the name of the host server (such as www.w3schools.com)
                                            |
$_SERVER['SERVER_SOFTWARE']	                | Returns the server identification string (such as Apache/2.2.24)
                                            |
$_SERVER['SERVER_PROTOCOL']	                | Returns the name and revision of the information protocol (such as HTTP/1.1)
                                            |
$_SERVER['REQUEST_METHOD']	                | Returns the request method used to access the page (such as POST)
                                            |
$_SERVER['REQUEST_TIME']	                | Returns the timestamp of the start of the request (such as 1377687496)
                                            |
$_SERVER['QUERY_STRING']	                |  Returns the query string if the page is accessed via a query string
                                            |
$_SERVER['HTTP_ACCEPT']	                    |  Returns the Accept header from the current request
                                            |
$_SERVER['HTTP_ACCEPT_CHARSET']	            |  Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
                                            |
$_SERVER['HTTP_HOST']	                    |  Returns the Host header from the current request
                                            |
$_SERVER['HTTP_REFERER']	                |  Returns the complete URL of the current page (not reliable because not all user-agents support it)
                                            |
$_SERVER['HTTPS']	                        |  Is the script queried through a secure HTTP protocol
                                            |
$_SERVER['REMOTE_ADDR']	                    |  Returns the IP address from where the user is viewing the current page
                                            |
$_SERVER['REMOTE_HOST']	                    |  Returns the Host name from where the user is viewing the current page
                                            |
$_SERVER['REMOTE_PORT']	                    |  Returns the port being used on the user's machine to communicate with the web server
                                            |
$_SERVER['SCRIPT_FILENAME']	                |  Returns the absolute pathname of the currently executing script
                                            |
$_SERVER['SERVER_ADMIN']	                |  Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
                                            |
$_SERVER['SERVER_PORT']	                    |  Returns the port on the server machine being used by the web server for communication (such as 80)
                                            |
$_SERVER['SERVER_SIGNATURE']	            |  Returns the server version and virtual host name which are added to server-generated pages
                                            |
$_SERVER['PATH_TRANSLATED']	                |  Returns the file system based path to the current script
                                            |
$_SERVER['SCRIPT_NAME']	                    |  Returns the path of the current script
                                            |
$_SERVER['SCRIPT_URI']	                    |  Returns the URI of the current page
____________________________________________|______________________________________________________________________________________________________________________________

EX:
   <?php
   echo $_SERVER['PHP_SELF'];
   echo "<br>";
   echo $_SERVER['SERVER_NAME'];
   echo "<br>";
   echo $_SERVER['HTTP_HOST'];
   echo "<br>";
   echo $_SERVER['HTTP_REFERER'];
   echo "<br>";
   echo $_SERVER['HTTP_USER_AGENT'];
   echo "<br>";
   echo $_SERVER['SCRIPT_NAME'];
   ?>



$_REQUEST
******************************************************
// Is used to collect data after submitting an HTML form.
EX:  
    <html>
        <body>
            <form method="post" action="<?php
            echo $_SERVER['PHP_SELF'];?>">
            Name:<input type="text" name="fname">
            <input type="submit">
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = $_REQUEST["fname"];
                if(empty($name)){
                    echo "Name is empty";
                }else{
                    echo $name
                }
            }
            ?>
        </body>
    </html>




$_POST
*********************************************************************
// Is used to collect form data after submitting an HTML form with method = "post".

EX:  
<html>
        <body>
            <form method="post" action="<?php
            echo $_SERVER['PHP_SELF'];?>">
            Name:<input type="text" name="fname">
            <input type="submit">
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = $_POST["fname"];
                if(empty($name)){
                    echo "Name is empty";
                }else{
                    echo $name
                }
            }
            ?>
        </body>
    </html>



$_GET
***********************************************
// Is used to collect form data after submitting an HTML form with method = "get".
// Can also collect data sent in the URL.

// Assume this is an html page .

<html>
<body>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
// if user clicks the link --> Test $GET
// parameters subject and web are sent to ---> test_get.php
// we can access from there with ---> $_GET

</body>
</html>
____________________________
// The code of test_get.php is --->

<html>
<body>

<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>

</body>
</html>


