<?php

$date = "2016-01-14";


function date_formatter ($date){
	$utime = strtotime($date);
	if($utime === false){
		return "";
	} 
	return date("l, F jS Y", strtotime($date));
}


?>