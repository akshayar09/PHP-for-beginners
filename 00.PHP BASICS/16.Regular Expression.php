// It is a sequence of characters that forms a search pattern.
// It can be a single character or a more complicated pattern.
// It can be used to perform all types of text search and text replace operations.

SYNTAX:----
    $exmple = "/medium/i";

    // " / " ---> delimiter.
    // medium ---> pattern that is being searched.
    // " i " ---> modifier that makes search CASE INSENSITIVE.



    // Delimiter cannot be a) letter b) number c) \ d) space.
    // # ~ ....can be used.


REGULAR EXPRESSION FUNCTIONS
***********************************************************

1) preg_match()     -----> Returns 1 if the pattern was found in string / 0 if not.

   EX:---
      <?php
     $str = "Visit Medium";
     $pattern = "/medium/i";
     echo preg_match($pattern, $str); // Outputs 1
     ?>
2) preg_match_all() -----> Returns the no. of times the patterin was found in the string.
  EX:---
  <?php
  $str = "The rain in SPAIN falls mainly on the plains.";
  $pattern = "/ain/i";
  echo preg_match_all($pattern, $str); // Outputs 4
  ?>

3) preg_replace()   -----> Returns the string with the pattern replaced.
EX:
   <?php
   $str = "Visit Microsoft!";
   $pattern = "/microsoft/i";
   echo preg_replace($pattern, "NETFLIX", $str); // Outputs "Visit NETFLIX!"
   ?>


RegEX MODIFIERS
***********************************************************
i  -----> Performs a case insensitive search.
m  -----> Performs a multiline search.
u  -----> Enables correct matching of UTF-8 encoded pattens.


RegEX PATTERNS
***********************************************************
[abc]  -----> Find one char from the options btw the brackets.
[^abc] -----> Find any char NOT betwween brackets.
[0-9]  -----> Find one char from the range 0 to 9.

META CHARACHTERS
***********************************************************
|   -----> Find a match for any one of the patterns seperated by | as in :- cat|dog|bird
.   -----> Find just one instance of char.
^   -----> Finds a match as the beginning of a string as in :- ^Hello
$   -----> Finds a match at the end of the string as in:- World$
\d  -----> Finds a digit
\s  -----> Finds a whitespace char.
\b  -----> Find a match at the the beginning :- \bWORD, or at end :- WORD\b
\uxxxx---> Find unicode char specified by the hexadecimal no. xxxx


QUANTIFIERS
***********************************************************

n+	     -----> Matches any string that contains at least one n
n*	     -----> Matches any string that contains zero or more occurrences of n
n?	     -----> Matches any string that contains zero or one occurrences of n
n{x}     -----> Matches any string that contains a sequence of X n's
n{x,y}	 -----> Matches any string that contains a sequence of X to Y n's
n{x,}	 -----> Matches any string that contains a sequence of at least X n's


GROUPING
*************************************************************
// Can use () to apply quantifiers to entire patterns.

//Use grouping to search for the word "banana" by looking for ba followed by two instances of na:

<?php
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str); // Outputs 1
?>



