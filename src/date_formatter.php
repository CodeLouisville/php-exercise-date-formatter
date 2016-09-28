<?php
function validateDate($date){
  if(preg_match('/\d{4}-\d{2}-\d{2}/',$date) ||
    preg_match('/\d{4}-\d{1}-\d{2}/',$date) ||
    preg_match('/\d{4}-\d{1}-\d{1}/',$date) ||
    preg_match('/\d{4}-\d{2}-\d{1}/',$date)  ) {
    return true;
  }else{
    return false;
  }
}
function date_formatter($date){
  if (is_string($date) && validateDate($date)){
    $date = date_create($date);
    return date_format($date, 'l, F jS Y');
  }else {
     return "";
  }
}
?>
