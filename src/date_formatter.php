<?php
//function date_formatter($date) {
////  $validDate = checkdate ($date);
//  $newDate = new DateTime($date);
//  
//  if ($newDate->format('Y-m-d') !== $date) {
//    return '';
//  } else {
//    return $newDate->format('l\, F jS Y');
//  }
//}

function date_formatter($date) {
//  $validDate = checkdate ($date);
  $newDate = new DateTime($date);  
  
  if ($newDate->createFromFormat('Y-m-d', $date) === false || $newDate->getLastErrors()['warning_count'] > 0) {
    return '';
  } else {
    return $newDate->format('l\, F jS Y');
  }
}