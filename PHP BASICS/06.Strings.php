1) strlen()
      Returns the length of a string.
      EX:
      <?php
      echo strlen("Hello PHP world!"); // outputs 16
      ?>

2) str_word_count()
      Counts the number of words in a string.
      EX:
       <?php
       echo str_word_count("Hello PHP world!"); // outputs 3
       ?>

3) strrev()
   Reverses a string.
   EX:
   <?php
   echo strrev("Hello PHP World!"); //outputs !dlroW PHP olleH
   ?>

4) strpos()
   Returns the position of a substring within a string.
   EX:
   <?php
   echo strpos("Hello PHP world!", "PHP"); // outputs 6
   ?>
   
   
   //The first character position in a string is 0 (not 1).

5) str_replace()
   Replaces a substring within a string.
   EX:
   // REPLACE WORLD WITH PHP
   <?php
   echo str_replace("world", "PHP", "Hello world!"); // outputs Hello PHP!
   ?>
   