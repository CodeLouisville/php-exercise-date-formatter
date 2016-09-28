<?php
function validateDate($date){
  if(preg_match('/\d{1,4}-\d{1,2}-\d{1,2}/',$date)) {
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
