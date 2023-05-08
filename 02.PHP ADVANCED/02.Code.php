INCLUDE
___________________________________________________________________________________________________________________________


Assume we have a standard footer file called "footer.php", that looks like this:

         <?php
         echo "<p>Copyright &copy; 2020-" . date("Y") . " DataStudio.com</p>";
         ?>
To include the footer file in a page, use the include statement:

Ex:-
    <html>
    <body>

    <h1>Welcome to my home page!</h1>
    <p>Some text.</p>
    <p>Some more text.</p>
    <?php include 'footer.php';?>

    </body>
    </html>