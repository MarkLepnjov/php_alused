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
    <br>
    Esimene külg<input type="text" name="k1"><br>
    Teine külg<input type="text" name="k2"><br>
    <br>
    Sinu kontrolltöö punktid: <input type="text" name="kt1"><br>
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
    echo $_GET['v1'].'<br>'.$_GET['v2'].'<br>';
    if (empty($_GET['v1']) or empty($_GET['v2'])){
        echo 'Vanus või vanused puuduvad<br>';
    } elseif($_GET['v1'] > $_GET['v2']){
        echo 'Esimene vanus on suurem kui teine<br>';
    } elseif($_GET['v2'] > $_GET['v1']){
        echo 'Teine vanus on suurem kui esimene<br>';
    } elseif($_GET['v2'] = $_GET['v1']){
        echo'Vanused on võrdsed<br>';
    }
}
if(isset($_GET['k1']) or isset($_GET['k2'])){
    echo'Esimene külg on:'.$_GET['k1'].'<br>';
    echo'Teine külg on:'.$_GET['k2'].'<br>';
    if (empty($_GET['k1']) or empty($_GET['k2'])){
        echo 'Külg või küljed puuduvad <br>';
    } elseif ($_GET['k1'] == $_GET['k2']){
        echo 'See on ruut!<br>';
    } else{
        echo'See on ristkülik<br>';
    }

}
if(isset($_GET['kt1'])) {
    switch ($_GET['kt1']) {
        case ($_GET['kt1'] < 5):
            echo 'KASIN!';
            break;
        case ($_GET['kt1'] < 9):
            echo 'TEHTUD!';
            break;
        case ($_GET['kt1'] == 10):
            echo 'SUPER!';
            break;
        default:
            echo 'Jätsid tühjaks!';
    }
}
?>
</body>
</html>