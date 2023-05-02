1) CONSTANTS ---------> Once they are defined they cannot be changed / undefined.

   * They are automatically GLOBAL for the complete script.
   * Name starts with a letter / underscore.

   * To create a constant ,use define() func.
   EX:
     define(name,value,case-insensitive) // name--> name of const, value---> value of const,specifies weather the const should be case insensitive.


2) PHP CONSTANT ARRAYS

  Create using define() func.
  EX:
    <?php
     define("Dogs",["Beagle","Husky","Pomerenian","Spitz"]);
     echo Dogs[1]; // outputs-->  Husky
     ?>
