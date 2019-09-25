<?php
$Breite = 4;
$Hoehe = 4;
$Anzahl = 4;

echo '<pre style="line-height: 7px">';

// for($h = 1; $h <= $Hoehe; $h++) {

// 	if($h == '1' or $h == $Hoehe) {
// 		for($w = 1; $w <= $Breite; ++$w) echo '#';
// 		echo '<br>';
// 	} else {
// 		echo '#';
// 		$neueBreite = $Breite - 2;
// 		for($w = 1; $w <= $neueBreite; ++$w) echo '&nbsp;';
// 		echo '#&#10;';
// 	}
// }

$Hoehe = 20;
$Breite = 20;
$Anzahl = 3;
$Widerholung = 3;



for($w = 1; $w <= $Widerholung; $w++) {

	for($Zeile = 1; $Zeile <= $Hoehe; $Zeile++) {

		for($i = 1; $i <= $Anzahl; $i++) {
			if($Zeile == 1 OR $Zeile == $Hoehe) {
				for($Spalte = 1; $Spalte <= $Breite; $Spalte++) {
					echo 'x';	
				}
			} else {
				echo 'x';
				for($Spalte = 2; $Spalte <= $Breite - 1; $Spalte++) {
					echo ' ';
				}
				echo 'x';
			}
			
		}
		echo '<br>';
		
		
	}

	echo "<br>";
}
