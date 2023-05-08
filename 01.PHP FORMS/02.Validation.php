VALIDATION RULES
************************************
1) NAME   -----------------> REQUIRED. 
2) MAIL   -----------------> REQUIRED.  
3) WEBSITE -----------------> OPTIONAL.
4) COMMENT -----------------> OPTIONAL.
5) GENDER  -----------------> REQUIRED.

// HTML code of form looks like:-
<form  method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>">

// When the form submitts,-------> Data sent with give method.

// $_SERVER["PHP_SELF"] -----> Superglobal variable taht returns the filename of currently executing script.
      
                               Sends the data to same page itself, so user will get error msg on the same page itself.

// htmlspecialchars() ----->  Converts special char to HTML entities.
                              Prevent attackers from exploiting data.
    
                              Assume we have the following form in a page named "test_form.php":

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    // user enters the normal URL in the address bar like "http://www.example.com/test_form.php", 
              the above code will be translated to:

<form method="post" action="test_form.php">


    // consider that a user enters the following URL in the address bar:

    // http://www.example.com/test_form.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E
    // In this case, the above code will be translated to:

<form method="post" action="test_form.php/"><script>alert('hacked')</script>

______________________________________________________________________________________________________________________________
TO AVOID THIS EXPLOTATION....
*************************************
// By using htmlspecialchars().
// The form code should look like this:

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

// The htmlspecialchars() function converts special characters to HTML entities. 
// Now if the user tries to exploit the PHP_SELF variable, it will result in the following output:

<form method="post" action="test_form.php/&quot;&gt;&lt;script&gt;alert('hacked')&lt;/script&gt;">