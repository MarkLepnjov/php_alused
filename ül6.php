<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Kirjuta number, et tekiks ruut tärnidest<input type="text" name="xd"><br>
    <input type="submit" value="Joonista ruut!"><br>
</form>
<?php
    for($nr=10;$nr>=1;$nr-=2){
        echo $nr.'<br>';
    }

    for($tarn=1; $tarn<=$_GET['xd'];$tarn++){
        for($veerg=1; $veerg<=$_GET['xd']; $veerg++){
            echo ' *';
        }
        echo '<br>';
    }
    for($nr1=3;$nr1<=100;$nr1+=3){
        echo $nr1.'<br>';
    }
$poisid = array(1=> 'juhan', 'miku', 'uku');
    $tudrukud = array(1=> 'mari','tibi','kelly');
$kokkup = count($poisid);
$kokkut = count($tudrukud);

for($nr=1;$nr<=$kokkup;$nr++){
    if($nr<$kokkup-2){
        continue;
    }
    echo $poisid[$nr].'    '.$tudrukud[$nr].'<br>';
}


?>
</body>
</html>