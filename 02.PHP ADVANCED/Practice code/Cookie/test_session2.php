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

       // outputs:-
       // Favourite teacher is Sonia
       // Favourite place is Switzerland.