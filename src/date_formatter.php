<?php

$date = "2012-01-14";

function date_formatter ($date){
	$myDate = explode('-', $date);
	if(strlen($myDate[0]) != 4 || strlen($myDate[1]) != 2 || strlen($myDate[2]) != 2){
		return "";
		}
	elseif (checkdate($myDate[1], $myDate[2], $myDate[0]) === false){
		return "";
	}
	else {
		return (new DateTime($date))->format("l, F jS Y");
	}
}

//var_dump (date_formatter($date)); 

?>


