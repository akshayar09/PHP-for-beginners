CONFIGURE "php.ini" FILES
1) Search for the file_uploads directive
2) Set it ON.

Create HTML FORM.
3) Form should use method = "post".
4) enctype = "multipart/fprm-data"
   To specify which content-type to use when submitting the form.
   ex:----> 
          <!DOCTYPE html>
          <html>
          <body>

          <form action="upload.php" method="post" enctype="multipart/form-data"> // the form sends data to file with name "upload.php"
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload"> // 
            <input type="submit" value="Upload Image" name="submit">
          </form>

          </body>
          </html>
5) CREATE THE FILE TO WHICH IT IS STORED
(upload.php)
   EXAMPLE:--> 
           <?php
           // Specify the dir where the file going to be placed.
           $target_dir = "uploads/";
           // Path of the file to be uploaded.
           $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
           $uploadOk = 1;
           // Holds the file extension of file in lower case.
           $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
           // Check if image file is a actual image or fake image.
           if(isset($_POST["submit"])){
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !==false){
                echo "File is an image :- ". $check["mime"] . ".";
                $uploadOk = 1;
            }else{
                echo "File is not an image. ";
                $uploadOk = 0;
            }
           }
           ?>

6) CHECK IF FILE ALREADY EXISTS.
  // In $target_dir = "uploads/";

  EXAMPLE:--> 
          // Check if file already exists
          if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
          }

7) LIMIT FILE SIZE.
   // file input field is named as "fileToUpload".
   // Check the size of file.

   EXAMPLE:
          // CHECK FILE SIZE
          if ($_FILES["fileToUpload"]["size"]>500000){
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
          }


8) LIMIT FILE TYPE
         // Only allow to upload jpg/jpeg/png/gif files.
         // Every other should give error.
         EXAMPLE:---> 
                 // Allow certain file formats
                 if($imageFileType!="jpg" && $imageFileType!="png" && $imageFileType!="jpeg"
                 && $imageFileType != "gif"){
                    echo "Sorry , only JPG,JPEG,PNG AND GIF files are allowed.";
                    $uploadOk=0;
                 }
