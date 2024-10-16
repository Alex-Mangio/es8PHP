<html>

<body>
    <?php
    session_start();

    $max = -10;
    $media = 0;
    $somma = 0;
    $count = 0;

    foreach ($_SESSION["dati"] as $dato) {
        foreach ($dato as $datino) {
            if ($datino > $max) {
                $max = $datino;
            }
            $somma += $datino;
            $count++;
        }
    }
    echo "La temperatura max e' di: ". $max ."<br>";
    echo "La media di tutte le temperature delle stazioni e': " .  $media = $somma / $count;
    ?>
    <form action="index.php">
        <input type="submit" value="Home">
    </form>
</body>

</html>