// A document that containing black fields, that the user can fill the data or user can select the data. 
// Casually the data will store in database.


// PHP superglobals $_GET  and $_POST are used to collect form data.
EX:
  <html>
  <body>
  <form action = "WELCOME TO PHP.php" method="post">
  Name : <input type = "text" name="name"><br>
  Email : <input type = "text" name = "email"><br>
  <input type = "submit">
  </form>
  </body>
  </html>

//WELCOME TO PHP.php contains:- 
    <html>
    <body>

    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>

    </body>
    </html>
OUTPUT:- 
     Welcome Akshaya
     Your email address is: akshaya@gmail.com






GET  V/S  POST
******************************************************************
1) Both create array  which holds key/ value pairs.
   KEYS:----> name of form controls.
   VALUES:----> Input data from the user.

2) Always accessible bcz its superglobals.

3) $_GET ---> Array of variables passed to the current script via the URL parameters.

4) $_POST ---> Passed to current script via the HTTP POST method.



USING GET
*********************************

1) Data sent from a form with the GET method is visible to everyone.
2) 2000 char is the limit of amount that is send.
3) NEVER USE TO SEND PASSWORDS OR SENSITIVE INFORMATION.


USING POST
*********************************

1) Data is invisible to others.
2) No limit on the the amount of data to send.
3) Not possible to bookmark page, since not displayed in URL.


