<?php
$number = 5; // The number for which factorial is calculated
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo "The factorial of $number is: $factorial";
?>
