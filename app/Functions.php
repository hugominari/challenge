<?php

/**
 * This function show number or string when number is multiples.
 * @param $num string|integer Number to verify multiples.
 * @return mixed Return number os string.
 * @author Hugo Minari Diniz <hugominari@icloud.com>
 */
function isMultiple($num)
{
	//Define the multiples
	$values = [
		3 => 'Linio',
		5 => 'IT',
		15 => 'Linianos'
	];
	
	//Sort in descending order by key
	krsort($values);
	
	//Verify if number is multiple
	foreach($values as $multiple => $value)
	{
		if($num % $multiple == 0)
			return $value;
	}
	
	//If no multiples, show number
	return $num;
}