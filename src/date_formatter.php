<?php

function date_formatter($input)
{
    $check = explode('-', $input);
    
    if (count($check) == 3 && strlen($check[0]) < 5) {
        $checkDate = checkdate(intval($check[1]), intval($check[2]), intval($check[0]));
    } else {
        return "";
    }
// Legacy escape
if ($checkDate && strlen($check[0]) > 2 && intval($check[0]) < 1970) {
    $legEsc = new DateTime($input);
    return date_format($legEsc, 'l, F jS Y');
    }
//strtotime allows for varied inputs
if ($checkDate) {
        $inputMod = strtotime($input);
        return date('l, F jS Y', $inputMod);
    } else {
        return "";
    }
}
?>
