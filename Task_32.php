<?php
function create_pattern($n) {
    $i = 1;
    while ($i <= $n) {
        $j = 1;
        while ($j <= $i) {
            echo "*";
            $j++;
        }
        echo "\n";
        $i++;
    }
}
create_pattern(8);
?>