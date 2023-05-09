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

       // outputs  
       //Session vars are set. Go to next page