<?php
function divide($numerator, $denominator){
    if ($denominator == 0){
        trigger_error("bhgg ja ynha se 0 se kyu kaat rha",E_USER_ERROR);
        return false;
    
    }

    return $numerator / $denominator;
}

$result = divide(10,1);
echo "$result";
?>