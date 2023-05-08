* fopen()  FUNCTION
         ---> used to create a file and open files.
                When opening an non existent file, this func will create it.
       Example: --->
                $myfile = fopen("newfile.txt","w")
            if There is no file,create file in same dir as code.

* fwrite() FUNCTION
       ---> Write a file.

EXAMPLE:---->
      <?php
      $myfile = fopen("newfile.txt","w") or die("Unable to open the file!!!") ;    
      $txt = "Jane Austin\n";
      fwrite($myfile,$txt);
      $txt = "Jane Winston/n";
      fwrite($myfile,$txt);
      fclose($myfile); // output:- Jane Austin
      ?>              //           Jane Winston
   
   // fwrite() --> 1st parameter:- name of file
                   2nd parameter:- string to be written.
___________________________________________________________________________________________________________________________
OVERWRITING
*************
// All the existing data will be erased.
EXAMPLE:--
       <?php
       $myfile = fopen("newfile.txt","w") or die("Unable to open!!!");
       $txt = "Harry Potter/n";
       fwrite($myfile,$txt);
       $txt = "Hemione Granger/n";
      fwrite($myfile,$txt);
       fclose($myfile); // output :- Harry potter   Hemione Granger
       ?> 
___________________________________________________________________________________________________________________________
APPEND TEXT
*************
// Append to a file using "a" mode.
// To the end of the file.
// "w" mode overrides the old content.
EXAMPLE:---
       <?php
       $myfile =  fopen("newfile.txt","a") or die("Unable to open!!!");
       $txt = "Ron Weasley/n";
       fwrite($myfile,$txt);
       $txt = "Eva Eliza/n";
       fwrite($myfile,$txt);
       fclose($myfile);// // output :- Harry potter   Hemione Granger  Ron Weasley  Eva Eliza 
       ?>