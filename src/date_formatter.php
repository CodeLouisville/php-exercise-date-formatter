<?php

function date_formatter ($date){
	if(gettype($date) !== 'string'){
		return "";
	}
	$date_parse = explode('-', $date);
	if(count($date_parse) !== 3){
		return "";
	}
	$year = $date_parse[0];
	$month = $date_parse[1];
	$day = $date_parse[2];
	if (checkdate($year, $month, $day) === false){
		return "";
	}
	else {
		return (new DateTime($date))->format("l, F jS Y");
	}
}

?>


