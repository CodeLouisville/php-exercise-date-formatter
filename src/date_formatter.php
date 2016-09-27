<?php

function validateDate($date, $format = 'Y-m-d')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}



function date_formatter($date){

  if (is_string($date)){
    $date = date_create($date);

    return date_format($date, 'l, FjS Y');

  }else {
     echo "No"; //change to return "";
  }
}

echo date_formatter("2016-01-16");




?>
