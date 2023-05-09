// A way to store information in variables 
// To be used across multiple pages.
// Unlike a cookie, the info is ot stored on the users pc.

// While doing a work in an app and u close it.
// Its likely a session.
// But web server doesnot know who u are.

// Session variable is the splution.
// They store user info to be used across multiple pages.
// Holds the user info and are available toall ages in 1 app.
// Like shopping pages, pass cart information to other pages.

// For a permanent storage , have to store in a database.
___________________________________________________________________________________________________________________________
STARTING A PHP SESSION
**************************

// session_start() ---> to start a session.
// Are set with global variable  ---> $_SESSION.
EXAMPLE:--> 

// create a page called "trial_session.php".

       <?php
       // start the session
       session_start();
       ?>
       <!DOCTYPE html>
       <html>
        <body>
            <?php
            // Set session variables
            $_SESSION["favteacher"] = "Sonia";
            $_SESSION["favplace"] = "Switzerland";
            echo"Session vars are set.";
            ?>
            <a href= "test_session2.php">Go to next page</a>
        </body>
       </html>

___________________________________________________________________________________________________________________________
GET SESSION VARIABLE VALUES
**************************
// Create another page "test_session2.php".
// We will access the session info from the page we previously created.

// Vars are not passed individually.
// They are retrieved from the session 
// Using session_start.

EXAMPLE:--> 
       <?php
       session_start();
       ?>
       <!DOCTYPE html>
       <html>
        <body>
            <?php
            // Echo session variables that were set on previously created page.
            echo "Favourite teacher is ". $_SESSION["favteacher"]."<br>";
            echo "Favourite place is ". $_SESSION["favplace"].".";
            ?>
        </body>
       </html>

___________________________________________________________________________________________________________________________
DESTROY A PHP SESSION
**************************
// session_unset() 
// session_destroy()
// Both to remove all global session variables and destroy the session.
EXAMPLE:-
     <?php
     session_start();
     ?>
     <!DOCTYPE html>
     <html>
        <body>
            <?php
            // remove all sessions
            session_unset();

            // destroy the session
            session_destroy();
            ?>
            
        </body>
     </html>