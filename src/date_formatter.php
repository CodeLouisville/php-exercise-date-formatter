<?php
function validateDate($date){
  if(preg_match('/\d{4}-\d{2}-\d{2}/',$date)){
    return true;
  }else{
    return false;
  }
}
function date_formatter($date){
  if (is_string($date) && validateDate($date)){
    $date = date_create($date);
    return date_format($date, 'l, FjS Y');
  }else {
     echo "";
  }
}
?>
