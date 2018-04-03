<?php

function sortArray() {
	$arr = array(6, 5, 11, 8, 1, 9);
	$newArr = array();

	for($x = 1; $x <= 100; $x++) {
		if(in_array($x, $arr)) {
			array_push($newArr, $x);
		}
	}
	return $newArr;
}

$sortArr = sortArray();
foreach ($sortArr as $value) {
	echo $value . "<br />";
}

?> 

