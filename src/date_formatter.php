<?php

function date_formatter(string $str) {
    if (strlen($str) !== 10) {
        return "";
    }
    
    $date = explode("-", $str);
    
    if (count($date) !== 3) {
        return "";
    }
    
    if (checkdate($date[1], $date[2], $date[0])) {
        $date = new DateTime($str);
        return $date->format('l, jS F Y');
    } else {
        return "";
    }
}
