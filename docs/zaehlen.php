<?php

// echo 1 . '<br>';
// echo 2 . '<br>';
// echo 3 . '<br>';
echo '<h1>For Loop</h1></h1>';
echo '<pre style="background: #e9edf0; padding: 30px">for($i = 1; $i <= 10; ++$i) echo $i;</pre>';



for($i = 1; $i <= 10; ++$i) echo $i . ' ';


echo '<h1>Do While Loop</h1>';
echo '<pre style="background: #e9edf0; padding: 30px">
$a = 0;

do {
	echo $a;
	++$a;
} while ($a <= 10);
</pre>';

$a = 0;

do {
	echo $a . ' ';
	++$a;
} while ($a <= 10);


echo '<h1>While Loop</h1>';

echo '<pre style="background: #e9edf0; padding: 30px">
$b = 0;

while ($b <= 10) {
	echo $b;
	++$b;
}

</pre>';

$b = 0;

while ($b <= 10) {
	echo $b . ' ';
	++$b;
}