<?php

$Breite = 40;
$Hoehe = 15;

echo '<pre>';
for($h = 1; $h <= $Hoehe; $h++) {
	switch ($h) {
		case '1':
			for($w = 1; $w <= $Breite; ++$w) echo '*';
			echo '<br>';
		break;
		case $Hoehe:
			for($w = 1; $w <= $Breite; ++$w) echo '*';
		break;
		default:
			echo '*';
			$neueBreite = $Breite - 2;
			for($w = 1; $w <= $neueBreite; ++$w) echo '&nbsp;';
			echo '*&#10;';
		break;
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
 

