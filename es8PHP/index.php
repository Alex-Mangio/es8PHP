<?php
session_start();
?>
<html>
    <h1>TEMPERATURE CITTA</h1>
    <form action="riepilogo.php" method="get">
            <p>Stazione <input list="scelte" name="stazione">
                <datalist id="scelte">
                    <option>Bologna</option>
                    <option>Firenze</option>
                    <option>Napoli</option>
                </datalist>
            Temperature <input type="number" min="-5" max="60" name="temperatura"></p>
            <input type="submit" name="pulsante">

    </form>
</html>