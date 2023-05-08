*  CREATING / READING / UPLOADING / EDITING FILES.

* readfile()  FUNCTION
     // Reads a file and writes it to the output buffer.
     // Suppose the file Fullform.txt stored on server is:--
             PHP = Hypertext Preprocessor
             SQL = Structured Query Language
             XML = EXtensible Markup Language
        // The php code to read the file and write it to the output is like:--
             <?php
             echo readfile("Fullform.txt");
             ?>