<?php
/*
 Ülesanne 3
Mark Lepnjov
24.11.2020
*/
/*
 Ülesanne 3
Mark Lepnjov
24.11.2020
*/
$kulg1 = $_GET['t1'];
$kulg2 = $_GET['t2'];
$kulg3 = $_GET['t3'];
$kulg4 = $_GET['t4'];
$tkorgus = $_GET['th'];
$umbermoot = $kulg1 + $kulg2 + $kulg3 + $kulg4;
$pindala = (($kulg1 + $kulg2)/2) * $tkorgus;
$rkulg1 = $_GET['r1'];
$rkorgus = $_GET['rh'];
$rpindala = $rkulg1 * $rkorgus;
$rumbermoot = $rkulg1 * 4;

echo 'TRAPETS <br>';
echo 'Esimene külg: '.$kulg1.'<br>';
echo 'Teine külg: '.$kulg2.'<br>';
echo 'Kolmas külg: '.$kulg3.'<br>';
echo 'Neljas külg: '.$kulg4.'<br>';
echo 'Kõrgus on: '.$tkorgus.'<br>';
echo 'Trapetsi Ümbermõõt on P = a + b + c + d <br>';
echo 'Ehk siis P = '.$kulg1.' + '.$kulg2.' + '.$kulg3.' + '.$kulg4.' = '.$umbermoot.'<br>';
echo 'Pindala valem on S = ((a+b)/2) * h <br>';
echo 'Pindala on: S = (('.$kulg1. '+'.$kulg2.')/2) * '.$tkorgus.' = '.$pindala.'<br>';
echo 'ROMB <br>';
echo 'Külg on: '.$rkulg1.'<br>';
echo 'Kõrgus on: '.$rkorgus.'<br>';
echo 'Pindala valem on S = a*h <br>';
echo 'Pindala on siis S = '.$rkulg1.'* '.$rkorgus.' = '.$rpindala.'<br>';
echo 'Ümbermõõdu valem on P = 4 * a<br>';
echo 'Ümbermõõt on siis: P = 4 * '.$rkulg1.' ='.$rumbermoot.'<br>';

?>