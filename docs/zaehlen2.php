<?php

$Ende = 100;
$count_array = array();

for($i = 1; $i <= $Ende; ++$i) {

	if(($i % 2 == 0) AND ($i % 3 == 0) AND ($i % 5 == 0)) {
		array_push($count_array, $i);
	};
}

echo 'Zwischen 1 und'. $Ende . ' gibt es '. count($count_array) . ' Zahlen, die durch 2 teilbar sind';