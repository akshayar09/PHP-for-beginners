* OPEN / READ & CLOSE A FILE ON THE SERVER.

* fopen() FUNCTION ----> TO OPEN FILES
      Better than readfile() func.

* Fullform.txt from server.
             PHP = Hypertext Preprocessor
             SQL = Structured Query Language
             XML = EXtensible Markup Language
    Example:
         <?php                                                                   
         $myfile = fopen("Fullform.txt","r") or die("Unable to open file!!!");   
         echo fread($myfile,filesize("Fullform.txt"));                           
         fclose($myfile);                                                        
         ?>
    
    Explanation:---

        fopen() --> contains the name of file to be opened.
        Second parameter specifies which mode the file should be opened.

        r -->  Open a file for read only.
        w -->  Open a file for write only.
               Erases contents of file / creates a new file if it doesnt exist.
        a -->  Open a file for write only.
               Existing data is preserved.
        x -->  Creates a new file for write only.
               Returns FALSE and an error if file already exists.
        r+ --> Open a file for read/write.
        w+ --> Open a file for read/write. 
               Erases contents of file / creates a new file if it doesnt exist.
        a+ --> Open a file for read/write.
               Existing data is preserved.
        x= --> Creates a new file for read/write.
               Returns FALSE and an error if file already exists.

        fread() --> reads from an opened file.
              1st parameter --> name of file
              2nd parameter --> max no. of bytes to read.
        fclose() --> to close an open file.
                requirs the name of file.

fgets() FUNCTION:---
     Used to read a single line from a file.
     Example:---
         <?php                                                                   
         $myfile = fopen("Fullform.txt","r") or die("Unable to open file!!!");   
         echo fgets($myfile);                           
         fclose($myfile);                                                        
         ?>
            
feof() FUNCTION:_---
         Checks if END OF FILE has reached or not.
         Good to loop through data of unknown length.
         Example:--
         <?php                                                                   
         $myfile = fopen("Fullform.txt","r") or die("Unable to open file!!!");   
         while(!feof($myfile)){
            echo fgets($myfile)."<br";
         } // Output one line untill end of file.                        
         fclose($myfile);                                                        
         ?>

fgetc() FUNCTION
            Read a single char from a file.
            Example:--
            <?php                                                                   
            $myfile = fopen("Fullform.txt","r") or die("Unable to open file!!!");   
            while(!feof($myfile)){
                echo fgetc($myfile);
            } // output one char untill end of file.                         
            fclose($myfile);                                                        
            ?>