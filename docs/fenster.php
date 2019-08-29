<?php


$Breite = 20;
$Hoehe = 5;

echo '<pre>******<br>';
echo '*&nbsp;&nbsp;&nbsp;&nbsp;*<br>';
echo '*&nbsp;&nbsp;&nbsp;&nbsp;*<br>';
echo '*&nbsp;&nbsp;&nbsp;&nbsp;*<br>';
echo '*&nbsp;&nbsp;&nbsp;&nbsp;*<br>';

echo '****** <br></pre>';

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
			for($w = 1; $w <= $neueBreite; ++$w) echo '&nbsp;&nbsp;';
			echo '*<br>';
		break;
	}
}
 

