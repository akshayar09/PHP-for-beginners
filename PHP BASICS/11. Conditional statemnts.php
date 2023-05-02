                                       CONDITIONAL STATEMENTS
*********************************************************************************************************

* if statement.
* if ... else statement.
* if ...elseif ...else statement.
* switch statement.


1) IF STATEMENT
--------------------------------------------------------------------

if (condition){
    // if TRUE then execute this code
}

EX: 
    <?php
    $x = 12;

    if ($x > 0) {
	     echo "The number is positive";  //   OUTPUTS The number is positive
      }
    ?>

2) IF ....ELSE STATEMENT
-------------------------------------------------------------------------------------------
if (condition) {
  code to be executed if condition is true;
} else {
  code to be executed if condition is false;
}
EX:
    <?php
    $x = -12;

    if ($x > 0) {
	   echo "The number is positive";
    }

    else{
	   echo "The number is negative";
    }
    ?>

3) IF .. ELSEIF ...ELSE STATEMENT
---------------------------------------------------------------------------------
if (condition) {
    // if TRUE then execute this code
}
elseif {
    // if TRUE then execute this code
}
elseif {
    // if TRUE then execute this code
}
else {
    // if FALSE then execute this code
}

ex: 
    <?php
    $x = "August";

    if ($x == "January") {
	   echo "Happy Republic Day";
    }

    elseif ($x == "August") {
	   echo "Happy Independence Day!!!";
    }

    else{
	   echo "Nothing to show";
    }
    ?>


4) SWITCH STATEMENT
---------------------------------------------------------------------------
switch(n) {
    case statement1:
        code to be executed if n==statement1;
        break;
    case statement2:
        code to be executed if n==statement2;
        break;
    case statement3:
        code to be executed if n==statement3;
        break;
    case statement4:
        code to be executed if n==statement4;
        break;
    ......
    default:
        code to be executed if n != any case;

EX:
<?php
$n = "February";

switch($n) {
	case "January":
		echo "Its January";
		break;
	case "February":
		echo "Its February";
		break;
	case "March":
		echo "Its March";
		break;
	case "April":
		echo "Its April";
		break;
	case "May":
		echo "Its May";
		break;
	case "June":
		echo "Its June";
		break;
	case "July":
		echo "Its July";
		break;
	case "August":
		echo "Its August";
		break;
	case "September":
		echo "Its September";
		break;
	case "October":
		echo "Its October";
		break;
	case "November":
		echo "Its November";
		break;
	case "December":
		echo "Its December";
		break;
	default:
		echo "Doesn't exist";
}
?>

***********************TERNARY OPERATORS -----> SHORTHAND WAY OF IF.. ELSE

<?php
$x = -12;

if ($x > 0) {
	echo "The number is positive \n";
}
else {
	echo "The number is negative \n";
}

// This whole lot can be written in a
// single line using ternary operator
echo ($x > 0) ? 'The number is positive' :
				'The number is negative';
?>




