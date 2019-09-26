<?php 
// function Basis2hoch($n) { 
// 	return 2 ** $n; 
// }

// for($x = 1; $x <= 10; $x++) { echo '2 ^ '.$x.' = '. number_format(Basis2hoch($x), 0, '', '')  . '<br>';}


function rechne($Operant1, $Operator, $Operant2) {
	
		switch ($Operator) {
			case '+':
				return $Operant1 + $Operant2;
				break;
			case '-':
				return $Operant1 - $Operant2;
				break;
			case '/':
				if($Operant2 != 0) return $Operant1 / $Operant2; else return 'Du kannst nicht durch 0 teilen';
				break;
			case '%':
				if($Operant2 != 0) return $Operant1 % $Operant2; else return 'Du kannst nicht durch 0 teilen';
				break;
			case '*':
				return $Operant1 * $Operant2;
				break;
			case '^':
				return $Operant1 ** $Operant2;
				break;
			default:
				return 'Sorry '. $Operator . ' ist kein Valider Operator';
				break;
		}

}	
echo rechne(5, '+',rechne(4, '+', 5)). '<br>';
echo '5+3='. rechne(5, '+', 3). '<br>';


// Testing....
$operatoren = array('+', '-', '*', '/', );
for($i = 1; $i < 20; $i++) {
	echo rechne(rand(0, 100), $operatoren[array_rand($operatoren, 1)],rand(0, 100)). '<br>';
}






function ZiffernAlsWort($index) {
	$ZahlenWoerter = array(
		'0' => 'Null',
		'1' => 'Eins',
		'2' => 'Zwei',
		'3' => 'Drei',
		'4' => 'Vier',
		'5' => 'Fünf',
		'6' => 'Sechs',
		'7' => 'Sieben',
		'8' => 'Acht',
		'9' => 'Neun'
	);
	return $ZahlenWoerter[$index];
}




echo '<h1> Ziffer als Wort</h1>';

for($Ziffer = 0; $Ziffer <= 7; $Ziffer++){
	echo $Ziffer .' ' .ZiffernAlsWort($Ziffer) .'<br>';
} 