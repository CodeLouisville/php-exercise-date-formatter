<?php

//$date = "2016-01-14";
$date = '1-3-2016';

$myDate = explode('-', $date);

function date_formatter ($date){
	$myDate = explode('-', $date);
	if (checkdate($myDate[1], $myDate[2], $myDate[0]) === false){
		return "";
	}
	else {
		return (new DateTime($date))->format("l, F jS Y");
	}
}

var_dump (date_formatter($date));

?>

