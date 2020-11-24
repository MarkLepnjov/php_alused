<?php
/*
 Ülesanne 1
Mark Lepnjov
24.11.2020
*/
$x = 5;
$y = 10;
$liitmine = $x + $y;
$lahutamine = $x - $y;
$korrutamine = $x * $y;
$jagamine = $x / $y;
$jaak = $x % $y;
$sentimeetrid = $x / 10;
$meetrid = $x / 1000;
echo '5 + 10 = '.$liitmine.'<br>';
echo '5 - 10 = '.$lahutamine.'<br>';
echo '5 * 10 = '.$korrutamine.'<br>';
echo '5 / 10 = '.$jagamine.'<br>';
echo 'jääk = '.$jaak.'<br>';
printf('5 millimeetrit = %0.2f sentimeetrit <br>', $sentimeetrid);
printf('5 sentimeetrit = %0.2f meetrit <br>', $meetrid);
$a = 10;
$b = 20;
$c = 15;
$umbermoot = $a + $b + $c;
$pindala = ($a * $b)/2;
echo 'üks külg on: '.$a." sentimeetrit<br>";
echo 'teine külg on: '.$b." sentimeetrit<br>";
echo 'kolmas külg on: '.$c." sentimeetrit<br>";
echo 'Ümbermõõt on: 10 + 20 + 15 = '.$umbermoot." sentimeetrit<br>";
echo 'Pindala on: (10 * 20)/2 = '.$pindala." sentimeetrit<br>";