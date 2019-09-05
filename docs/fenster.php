<?php

$Breite = 15;
$Hoehe = 15;

echo '<pre style="line-height: 7px">';

for($h = 1; $h <= $Hoehe; $h++) {

	if($h == '1' or $h == $Hoehe) {
		for($w = 1; $w <= $Breite; ++$w) echo '*';
		echo '<br>';
	} else {
		echo '*';
		$neueBreite = $Breite - 2;
		for($w = 1; $w <= $neueBreite; ++$w) echo '&nbsp;';
		echo '*&#10;';
	}
}

echo '<br>';

for($i = 1; $i <= $Breite; $i++) {
	for($x = 0; $x <= $Breite -($i +1); ++$x) echo '&nbsp;';
	echo '*&#10;';
}

for($i = 1; $i <= $Breite; $i++) {
	for($a = $i - 2; $a >= 0; $a--) echo '&nbsp;';
	echo '*&#10;';
}

echo '</pre>';
 

