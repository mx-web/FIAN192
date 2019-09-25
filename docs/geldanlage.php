<?php

$kaptial = 1000;
$laufzeit = 7;
$prozentsatz = 3;
$abjahrmehr = 4;
$prozentsteigerung = 0.5;
$endgeld = 0;

echo '<pre>';

for($Jahr = 1; $Jahr <= $laufzeit; ++$Jahr) {

	if($Jahr >= $abjahrmehr) {
		// Jetzt gibts mehr
		$prozentsatz = $prozentsatz + $prozentsteigerung;
	}

	echo 'Jahr ' . $Jahr .' '. $prozentsatz . '%';

	$kaptial = $kaptial + ($kaptial * $prozentsatz) / 100;
	$endgeld = round($kaptial, 2);
	echo ' ' . $endgeld . '€';

	echo '<br>';
}
echo '----------------------<br>';
echo '  '.$endgeld .'€  <br>';
echo '- '.$endgeld .'€  <br> ';

echo '----------------------<br>';
echo '+ '. (floatval($endgeld) - $kaptial) . '€';
echo '</pre>';
