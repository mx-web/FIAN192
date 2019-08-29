<?php

echo '<h1>Ohne Schleife</h1>';
echo '<pre style="background: #e9edf0; padding: 30px">echo 1..10;</pre>';



echo 1 . ' ';
echo 2 . ' ';
echo 3 . ' ';
echo 4 . ' ';
echo 5 . ' ';
echo 6 . ' ';
echo 7 . ' ';
echo 8 . ' ';
echo 9 . ' ';
echo 10 .' ';







echo '<h1>For Loop</h1></h1>';
echo '<pre style="background: #e9edf0; padding: 30px">for($i = 1; $i <= 10; ++$i) echo $i;</pre>';



for($i = 1; $i <= 10; ++$i) echo $i . ' ';


echo '<h1>Do While Loop</h1>';
echo '<pre style="background: #e9edf0; padding: 30px">
$i = 0;

do {
	echo $i;
	++$i;
} while ($i <= 10);
</pre>';

$i = 0;

do {
	echo $i . ' ';
	++$i;
} while ($i <= 10);


echo '<h1>While Loop</h1>';

echo '<pre style="background: #e9edf0; padding: 30px">
$i = 0;

while ($i <= 10) {
	echo $i;
	++$i;
}

</pre>';

$i = 0;

while ($i <= 10) {
	echo $i . ' ';
	++$i;
}