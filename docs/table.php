<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
	
<div class="container mt-5">

<?php
$startzeit = microtime(true); // Startzeit

echo '<table border="1" width="100%" >';
echo '<tr>
<th class="px-2 p-1">#</th>
<th class="px-2 p-1">-#</th>
<th class="px-2 p-1">+</th>
<th class="px-2 p-1">-</th>
<th class="px-2 p-1">/</th>
<th class="px-2 p-1">%</th>
</tr>';


$max = 10;
for($i = 1; $i <= $max; $i++) {

	if($i % 2) {
		echo '<tr style="background-color: #ccc">';
	} else {
		echo '<tr style="background-color: #fff">';
	}

	echo (' <td class="px-2 p-1">'.$i.'</td>
			<td class="px-2 p-1">'. ($max - ($i - 1)).'</td>
			<td class="px-2 p-1">'.($max - ($i - 1) + $i).'</td>
			<td class="px-2 p-1">'.($i - (($max - ($i - 1)))).'</td>
			<td class="px-2 p-1">'.round($i / ($max - ($i - 1)), 2).'</td>
			<td class="px-2 p-1">'.$i % ($max - ($i - 1)).'</td>');
	echo '</tr>';
}
echo '</table>';


echo '<table border="0" width="100%" class="mt-5">';
echo '<tr>
<th class="px-2 p-1">#</th>
<th class="px-2 p-1">-#</th>
<th class="px-2 p-1">+</th>
<th class="px-2 p-1">-</th>
<th class="px-2 p-1">/</th>
<th class="px-2 p-1">%</th>
</tr>';
$max2 = 10;
for($i = 1; $i <= $max; $i++) {

	if($i % 2) {
		echo '<tr style="background-color: #ccc">';
	} else {
		echo '<tr style="background-color: #fff">';
	}

	echo (' <td class="px-2 p-1">'.$i.'</td>
			<td class="px-2 p-1">'. ($max2 - ($i - 1)).'</td>
			<td class="px-2 p-1">'.($max2 - ($i - 1) + $i).'</td>
			<td class="px-2 p-1">'.($i - (($max2 - ($i - 1)))).'</td>
			<td class="px-2 p-1">'.round($i / ($max2 - ($i - 1)), 2).'</td>
			<td class="px-2 p-1">'.$i % ($max2 - ($i - 1)).'</td>');
	echo '</tr>';
}
echo '</table>';

$stopzeit = microtime(true); // Stopzeit

// Auswertung
$laufzeit = ($stopzeit-$startzeit)*1000; // Berechnung
$laufzeit = substr($laufzeit, 0, 5); // Auf 5 Stellen begrenzen
echo "Scriptlaufzeit: ".$laufzeit." Millisekunden"; // Ausgabe


?>
</div>

</body>
</html>