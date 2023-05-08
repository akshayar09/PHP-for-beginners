// To check if the data enterd is only having letters and whitespaces.
// To check proper data is entered or not.
// filter_var() -----> To check an email is good to use is using this func.
// If the mail is not in correct format or any other error, then store an error message.
ex:
   $email = test_input($_POST["email"]);
   if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
   }


// We could check with URL also.


PHP - VALIDATE NAME
******************************
// To check if the name name field contains letters , dashes , apostrophes and whitespaces only.
// Store an error msg to show if the data is not valid.

// preg_match() -----> searches a string for pattern, returning true if the patern exists and false if not.


EX:
 $website = test_input($_POST["name"]);
 if(!preg_match("/^[a-zA-Z-']*$/", $name)) {
   $nameErr = "Invalid name format. Only letters and whitespace allowed.";
 }


PHP VALIDATE EMAIL
*****************************
// filter_var() func -----> to check an email address is well formed.
// If the mail is not in correct format or any other error, then store an error message.

EX:
  $email =test_input($_POST[$email]);
  if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
   $emailErr = "Invalid email format";
  }


PHP - VALIDATE URL
******************************
// To check if the url entered is a valid url.
// Store a msg if it is not valid.
EX:=
  $website = test_input($_POST["website"]);
  if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?+~_|!:,.;]*[-a-z0-9+&@#\/%+~_|]/i",$website)){
   $websiteErr = "Invalid URL";
  }



// COMPLETE CODE IN EXAMPLE CODES FOLDER.