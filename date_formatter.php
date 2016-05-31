                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <?php

function date_formatter($date){

  // validate bad dates...
  if (!preg_match("/\d+-\d+-\d+/", $date)){
    return "";
  }

  // Validate the format of the date...
  $fulldate = explode("-", $date);
  $y = $fulldate[0];
  $m = $fulldate[1];
  $d = $fulldate[2];

  // check for date format in array...
  if(!checkdate($m, $d, $y)){
    return "";
  }

  $timestamp = date_timestamp_get(date_create($date));
  $dateFormat = date("l, F jS Y", $timestamp);
  return $dateFormat;
}
?>
