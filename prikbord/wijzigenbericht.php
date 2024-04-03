<?php

    session_start();
    if (!isset($_SESSION["gebruikers_id"])) {
        header("Location: index.php");
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="registrerenstijl.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wijzig bericht</title>
</head>
<body>

<?php
    include "db.php";
    $bericht_id = $_GET["bericht_id"];
    $query = "SELECT * FROM berichten where bericht_id = $bericht_id";
    $resultaat = mysqli_query($verbinding, $query);
    $rij = mysqli_fetch_array($resultaat);
    $bericht = $rij["bericht"];
?>
    <h1 class="title">Bericht Wijzigen</h1>
    <div class="bericht">
        <form action="veranderbericht.php?<?php echo "bericht_id=$bericht_id";?>" method="post">
            <textarea name="verniewdebericht" rows=8 cols=32><?php echo $bericht; ?></textarea>
            <br>
            <input type="submit" value="Bericht updaten">
        </form>
    </div>
    <div class="knoppen">
        <p><a href="prikbord.php">Terug naar prikbord</a></p>
    </div>
</body>
</html>