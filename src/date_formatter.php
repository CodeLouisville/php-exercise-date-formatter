<?php

function date_formatter($date_string) {

  // make sure passed argument is a string
  if (gettype($date_string) !== 'string') {
    return '';
  }
  
  // split string into year, month, date components
  $date_parse_arr = explode('-', $date_string);
  
  // checks to make sure that exactly 3 parts split by dashes were passed 
  if (count($date_parse_arr) !== 3) {
    return '';
  }
  
  // assign friendly variable names
  $year = $date_parse_arr[0];
  $month = $date_parse_arr[1];
  $day = $date_parse_arr[2];
  
  // make sure all components are numeric values
  if (is_numeric($year) && is_numeric($month) && is_numeric($day)) {
  
    // make sure components build into a valid date
    if (checkdate((int)$month, (int)$day, (int)$year)) {
      // combine into unix timestamp for date() function
      $timestamp = mktime(0, 0, 0, $month, $day, $year);
      $format = 'l, F jS Y';
      
      return date($format, $timestamp);
      
    } else {
      return '';
    }
  } else {
    return '';
  }

}

?>