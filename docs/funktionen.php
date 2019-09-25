<?php 
function Basis2hoch($n) { 
	return 2 ** $n; 
}

for($x = 1; $x <= 100; $x++) { echo '2 ^ '.$x.' = '. number_format(Basis2hoch($x), 0, '', '')  . '<br>';}