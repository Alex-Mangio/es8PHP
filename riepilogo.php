<?php

session_start();


if (!isset($_SESSION["dati"])) {
    $_SESSION["dati"] = [
        "Bologna" => array(),
        "Firenze" => array(),
        "Napoli" => array()
    ];

}

if ($_GET["stazione"] == "Bologna") {
    array_push($_SESSION["dati"]["Bologna"], $_GET["temperatura"]);
    
}
else if ($_GET["stazione"] == "Firenze") {
    array_push($_SESSION["dati"]["Firenze"], $_GET["temperatura"]);
}
else if ($_GET["stazione"] == "Napoli") {
    array_push($_SESSION["dati"]["Napoli"], $_GET["temperatura"]);
}

echo "<ul>";
foreach($_SESSION["dati"] as $key => $dato){
    foreach($dato as $datino){
        echo "<li>$key $datino</li><br>";
    } 
}
echo "</ul>";
?>

<html>
    <p>
<form action="index.php">
    <input type="submit" value="Home">
</form>

<form action="statistiche.php" method="get">
    <input type="submit" value="Statistiche">
</form></p>
<a href="reset.php">Resetta dati</a>

</html>