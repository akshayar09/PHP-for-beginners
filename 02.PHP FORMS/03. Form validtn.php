1) htmlspecialchars() ----> Pass all variables through htmlspecialchars() func.
2) trim()             ----> Trim unnecessary char like extra space, tab , newline...
3) stripslashes()     ----> Remove backslashes from the user input data.
4) Create a func for all these funcs.

ex:---
      <?php
      // define variables and set to empty values
      $name = $email = $gender = $comment = $website = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = test_input($_POST["name"]);
          $email = test_input($_POST["email"]);
          $website = test_input($_POST["website"]);
          $comment = test_input($_POST["comment"]);
          $gender = test_input($_POST["gender"]);
        }

       function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
       }
       $name = $gmail =$password = $user;
       ?>

