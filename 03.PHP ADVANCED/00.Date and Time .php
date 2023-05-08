                                           DATE AND TIME
********************************************************************************************************************
SYNTAX
      date(format,timestamp)

format ---> Required . Specifies the format of timestamp.
timestamp ---> Optional . Default is the current date and time.
___________________________________________________________________________________________________________________________
// GET A DATE
  
d - day of month
m - month
Y - Year in 4 digits.
l - day of the week.
"/" , "." , "-" - can insrt btw the char.

___________________________________________________________________________________________________________________________
// AUTOMATIC COPYRIGHT YEAR

date() - automatically update the copyright yr on ur website.
EX:
  &copy;2015-<?php echo date("Y");?>
___________________________________________________________________________________________________________________________
// GET A TIME

H - 24  HR format of hour.
h - 12 hr format.
i - Mnutes with leading zeros (00 - 59)
s - Seconds with leading zeros (00 - 59)
a - Lowercase am or pm.
___________________________________________________________________________________________________________________________
// GET THE TIME ZONE

EX:
  <?php
  date_default_timezone_set("America/Los Angeles");
  echo "The time is " . date("h : i : sa ");
  ?>
___________________________________________________________________________________________________________________________
// Create a Date with mktime()

if we omit date(), current date and time will be used as 
mktime() - returns Unix timestamp for date.

SYNTAX:-
      mktime(hour, minute, second, month, day, year)

EX:-
      <?php
      $d = mktime(11,13,50,5,5,2023);
      echo "Created date is" . date("Y-m-d h:i:sa",$d);
      ?>
___________________________________________________________________________________________________________________________
// CREATE A DATE FROM A STRING WITH -----> strtotime()

Used to convert a human readable date string into a Unix timestamp.

SYNTAX:-
        strtotime(time,now)

EX:-
        <?php
        $d = strtotime("3:30pm May 5 2023");
        echo "Created date is " . date("Y-m-d h:i:sa", $d);
        ?>
    OUTPUT:-
    Created date is 2023-05-05 3:30:00pm



