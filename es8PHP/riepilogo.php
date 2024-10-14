<?php
session_start();


if(!isset($_SESSION)) {
$_SESSION["dati"] = array();
}

$staz = array($_GET["stazione"]);
$_SESSION["dati"][0]= $staz;
$temp = array($_GET["temperatura"]);
$_SESSION["dati"][1]= $temp;


if(isset($_GET["pulsante"])){
    if(!empty($_GET["stazione"] && $_GET["temperatura"])){
        for($i = 0;$i< sizeof($_SESSION);$i++){
            echo"<ul>
            <li>".
           print_r( $_SESSION["dati"]);
            "</li>
            </ul>";
        }
    }else{
        echo "Inserisci tutti i dati";
    }
}

?>

<html>
    <form action="index.php">
    <input type="submit">
</form>
</html>