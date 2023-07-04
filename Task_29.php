<?php
$currentHour = 20;

if ($currentHour >= 0 && $currentHour < 12) {
    echo "Good Morning";
} elseif ($currentHour >= 12 && $currentHour < 18) {
    echo "Good Afternoon";
} else {
    echo "Good Evening";
}
?>
