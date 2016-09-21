<?php
function date_formatter($str) {
    
    $date = explode("-", $str);
    
    if (count($date) !== 3) {
        return "";
    }
    
    foreach ($date as $num) {
        if (!is_numeric($num)) {
            return "";
        }
    }
    
    if (checkdate($date[1], $date[2], $date[0])) {
        $date = new DateTime($str);
        return $date->format('l, F jS Y');
    } else {
        return "";
    }
}
