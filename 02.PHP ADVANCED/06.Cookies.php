* A small piece of info stored at client browser.
* To identify a user.
* Created at server side & saved to client browser.
* 
CREATE COOKIES WITH PHP.
********************************
* setcookie() FUNCTION
        // Create cookie.
        SYNTAX:-->
               setcookie(name,value,expire,path,domain,secure,httponly);
               // Except name everything is optional.
        
___________________________________________________________________________________________________________________________
CREATE/RETRIEVE A COOKIE.
****************************

EXAMPLE:--> 
// setcookie() func should appear before <html> tag.

// Creates a cookie named user.
// With value John
// Expire after 30 days.
// Path is /
// "/" means cookie is available in entire website.
// $_COOKIE ---> Global variable to retrieve the value of cookie "user."
// isset() ---> to find if the cookie is set.

      <?php
      $cookie_name = "user";
      $cookie_value = "John";
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
      ?> 
      <html>
        <body>
            <?php
            if (!isset($_COOKIE[$cookie_name])) {
                echo "Cookie $cookie_name not set.";
                } else {
                    echo "Cookie $cookie_name is set.<br>";
                    echo "Value: " . $_COOKIE[$cookie_name];
                            }
            ?>

        </body>
      </html>

// Value of cookie is automatically URLencoded when sending cookie.
// Automatically decodeed when recieved.
// setrawcookie() func --->  To prevent URLencoding .

___________________________________________________________________________________________________________________________
MODIFY A COOKIE VALUE.
**********************

// setcookie() ----> Set again the cookie using this.
EXAMPLE:--> 
        <?php
        $cookie_name = "user";
        $cookie_value = "Jane Doe";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        ?>
        <html>
            <body>
                <?php
                if(!isset($_COOKIE[$cookie_name])){
                    echo "Cookie $cookie_name not set.";
                }else{
                    echo "Cookie $cookie_name is set.<br>";
                    echo "Value: " . $_COOKIE[$cookie_name];
                }
                ?>
            </body>
        </html>
___________________________________________________________________________________________________________________________
DELETE A COOKIE.
******************

// setcookie() ---> use with an expiration date in the past.
EXAMPLE:- 
        <?php
        // Set exp date to 1 hr ago
        setcookie("user","",time()-3600);
        ?>
        <html>
            <body>
                <?php
                echo "cookie 'user' is deleted."
                ?>
            </body>
        </html>
___________________________________________________________________________________________________________________________
CHECK IF COOKIES ARE ENABLED.
**************************

// Create a test cookie with setcookie().
// Count the $_COOKIE array var.

EXAMPLE:---> 
        <?php
        setcookie("test_cookie","test",time()+3600,'/');
        ?>
        <html>
            <body>
                <?php
                if(count($_COOKIE)>0){
                    echo "Cookies are enabled.";
                }else{
                    echo "Cookies are disabled.";
                }
                ?>
            </body>
        </html>