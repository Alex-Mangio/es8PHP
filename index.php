<?php
session_start();

?>
<html>
<h1>TEMPERATURE CITTA</h1>
<form action="riepilogo.php" method="get">
    <p>Stazione <input list="scelte" name="stazione" required>
        <datalist id="scelte">
            <?php
            $stazioni = ["Bologna", "Firenze", "Napoli"];
            for ($i = 0; $i < sizeof($stazioni); $i++) {
                echo " <option>" . $stazioni[$i] . "</option> ";
            }
            ?>
        </datalist>
        Temperature <input type="number" min="-5" max="60" name="temperatura" required>
    </p>
    <input type="submit">

</form>
<a href="reset.php">Resetta dati</a>

</html>