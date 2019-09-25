<?php

function fakultaet($wert) {
	if($wert <= 2) return $wert;
	return $wert * fakultaet($wert-1);
}

echo 'Die Gewinnwahrscheinlichkeit im Lotto (6 aus 49) ist 1: ' . fakultaet(49) / (fakultaet(43) * fakultaet(6));
