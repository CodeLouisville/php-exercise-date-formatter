<?php

//$date = "2016-01-14";
$date = '2000-31-12';


function date_formatter ($date){
	try {
		return (new DateTime($date))->format("l, F jS Y");
	} catch (Exception $e){
		return "";
	}
}

var_dump (date_formatter($date));

?>