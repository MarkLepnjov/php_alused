<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>xd</title>
</head>
<body>
<h2>Sisesta 2 täisarvu</h2>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Esimene täisarv <input type="text" name="t1"><br>
    Teine täisarv <input type="text" name="t2"><br>
    <br>
    Esimene vanus <input type="text" name="v1"><br>
    Teine vanus <input type="text" name="v2"><br>
    <input type="Submit" value="arvuta!"><br>
</form>
<?php

if(isset($_GET['t1']) or isset($_GET['t2'])){
    if ($_GET['t1'] == 0 or $_GET['t2'] == 0) {
        echo 'ära lükka 0 sinna<br>';
    } elseif (empty($_GET['t2']) or empty($_GET['t1'])) {
        echo 'Jätsid midagi tühjaks<br>';
    } else {
        $jagamine = $_GET['t1'] / $_GET['t2'];
        echo 'Jagatis on '.$jagamine.'<br>';
    }
}
if(isset($_GET['v1']) or isset($_GET['v2'])){
    if (empty($_GET['v1']) or empty($_GET['v2'])){
        echo 'Vanus või vanused puuduvad';
    } elseif()
}
?>
</body>
</html>