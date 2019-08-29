<?php

$Eimer1 = 'blau';
$Eimer2 = 'rot';
$Eimer3 = '';

echo '<h1>Vor dem Tausch</h1>';
echo 'Eimer1 ist '.$Eimer1.'</br>';
echo 'Eimer2 ist '.$Eimer2.'</br>';
echo 'Eimer3 ist '.$Eimer3.'</br>';

$Eimer3 = $Eimer2;

$Eimer2 = $Eimer1;

$Eimer1 = $Eimer3;

$Eimer3 = '';

echo '<h1>Nach dem Tausch</h1>';
echo 'Eimer1 ist '.$Eimer1.'</br>';
echo 'Eimer2 ist '.$Eimer2.'</br>';
echo 'Eimer3 ist '.$Eimer3.'</br>';