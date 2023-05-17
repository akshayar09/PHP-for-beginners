qstn: 2023=2+0+2+3=7

<?php
$a = 2023;
$sum = 0;
$rem = 0;
for ($i = 0; $i<= strlen($num); $i++){
    $rem = $num % 10;
    $sum = $sum + $rem;
    $num = $num / 10; 
}
echo"Sum of digits 2023 is $sum";    
?>

// OUTPUT :- Sum of digits 2023 is 7

