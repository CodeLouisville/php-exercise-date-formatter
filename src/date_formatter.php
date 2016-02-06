<?php

  function date_formatter($date) {
    
    // Deal with obviously bad date strings.
    if (!preg_match ("/\d+-\d+-\d+/", $date) ) {
        return "";
    }
    
    // Validate dates.
    $pieces = explode("-", $date);
    $year = $pieces[0];
    $month = $pieces[1];
    $day = $pieces[2];
    if (!checkdate ( $month , $day , $year ) ) {
      return "";
    }
    
    $timeStamp = date_timestamp_get ( date_create($date) );
    $newFormat = date("l, F jS Y", $timeStamp);
    
    return $newFormat;
  }

?>
