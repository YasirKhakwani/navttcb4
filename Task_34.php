<?php
$months = array("January", "February", "March", "April", "May", "June", "July");
$valueToRemove = "March";

echo "Original Array: ";
print_r($months);

foreach ($months as $key => $value) {
    if ($value === $valueToRemove) {
        unset($months[$key]);
    }
}

echo "Updated Array: ";
print_r($months);
?>
