                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <?php
//create function for the date_formatter
function date_formatter($date){

  //validate bad dates
  if (!checkdate = preg_match('/\d+-\d+-\d+/')){
    return "";
  } else {

  //Validate the format of the date
  $fulldate = explode("-"; $date);
  $y = $fulldate[0];
  $m = $fulldate[1];
  $d = $fulldate[2];

  if(!checkdate = $m, $d, $y){
    return "";
  }

  $timestamp = date_timestamp_get(date_create($date);
  $dateFormat = date("1, F jS Y", $timestamp);

  return $dateFormat;
  }

}

?>
