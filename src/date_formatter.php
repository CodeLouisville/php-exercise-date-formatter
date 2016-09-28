<?php

function validateFormat($date){
  if(preg_match('/\d{1,4}-\d{1,2}-\d{1,2}/',$date)) {
    return true;
  }else{
    return false;
  }
}

function validateDate($date, $format = 'Y-m-d')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

function date_formatter($date){
  if (is_string($date) && validateFormat($date) && validateDate($date)){
    $date = date_create($date);
    return date_format($date, 'l, F jS Y');
  }else {
     return "";
  }
}
echo date_formatter("2015-02-29");
?>
