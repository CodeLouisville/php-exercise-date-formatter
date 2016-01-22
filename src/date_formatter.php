<?php

/*|| $newDate->getLastErrors()['warning_count'] > 0*/

//function date_formatter($date) {
//    if (strtotime($date) === false) {
//        return '';
//    }
//    
//    $newDate = new DateTime($date);  
//  
//  if ($newDate->createFromFormat('Y-m-d', $date) === false || $newDate->getLastErrors()['warning_count'] > 0) {
//    return '';
//  } else {
//    return $newDate->format('l\, F jS Y');
//  }
//}



function date_formatter($date) {
    $array = explode('-', $date);
    
    if (count($array) === 3) {
    $validDate = checkdate ((int)$array[1], (int)$array[2], (int)$array[0]);
    } else {
        return '';
    }
        
    if (strtotime($date) === false) {
        return 'str';
    }
    
    if ($validDate) {
        $newDate = new DateTime($date);  
  
        if ($newDate->createFromFormat('Y-m-d', $date) === false || $newDate->getLastErrors()['warning_count'] > 0) {
            return '';
        } else {
            return $newDate->format('l\, F jS Y');
        }
    }
    
    return 'no';
}