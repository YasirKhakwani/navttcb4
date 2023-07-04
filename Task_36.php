<?php
function isLowercase($str) {
    return $str === strtolower($str);
}


$string1 = "hello world";
$string2 = "Hello World";

if (isLowercase($string1)) {
    echo "String 1 is all lowercase.\n";
} else {
    echo "String 1 is not all lowercase.\n";
}

if (isLowercase($string2)) {
    echo "String 2 is all lowercase.\n";
} else {
    echo "String 2 is not all lowercase.\n";
}
?>