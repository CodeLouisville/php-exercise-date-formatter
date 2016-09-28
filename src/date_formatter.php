<?php
function validateDate($date, $format)
{
    $d = DateTime::createFromFormat($format, $date);
	//var_dump($d);
    return $d && $d->format($format) == $date;
}

function date_formatter ($dateInput)
{	
	$digit = explode("-", $dateInput);# deal with '2-2-2'
	if ($digit[0]<10){
		$dateInput = "200".	$dateInput;
	}

	$validated = validateDate($dateInput, 'Y-m-d');
	$validated = $validated||(validateDate($dateInput, 'Y-n-j'));
	$validated = $validated||(validateDate($dateInput, 'y-n-j'));
	if (!$validated) {
		return "";
	} else {
		$date=date_create($dateInput);
		return date_format($date,"l, F jS Y");	
	}
}

/*
$test = date_formatter ('2-2-2');
//var_dump($test);
echo $test;

*/
?>