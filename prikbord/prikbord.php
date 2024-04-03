<?php
    session_start();
    if (!isset($_SESSION["gebruikers_id"])) {
        header("Location: index.php");
    }

    
    
    if (isset($_GET["verwijder_prompt"])){
        $verwijder_prompt = $_GET["verwijder_prompt"];
        $ver_bericht_id = $_GET["bericht_id"];
        if ($verwijder_prompt == true){
            echo "<div class='verwijder'>";
            echo "<h1> Weet u het zeker? </h1>";
            echo "<p><a href='verwijder.php?bericht_id=$ver_bericht_id'>Verwijderen</a>  <a href='prikbord.php'>Annuleren</a></p>";
            echo "</div>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikbord</title>
    <link rel="stylesheet" href="stijl.css">
</head>
<body>
    <h1 class="title">Prikbord</h1>
    <p class="keuzemenu">
        <a href="nieuw_bericht.php">Nieuw bericht</a> 
        <a href="account.php">Account wijzigen</a> 
        <a href="loguit.php">Uitloggen</a>
    </p>
    

   

    <div class="berichten">

    <?php
        include "db.php";

        $query = "SELECT * FROM berichten INNER JOIN gebruikers ON berichten.gebruikers_id = gebruikers.gebruikers_id";
        $resultaat = mysqli_query($verbinding, $query);

        while ($rij = mysqli_fetch_array($resultaat)) {
            $bericht = $rij["bericht"];
            $datum = $rij["datum"];
            $gebruikers_id = $rij["gebruikers_id"];
            $naam = $rij["naam"];
            $bericht_id = $rij["bericht_id"];
            $draaing = rand(-15,15);

            echo "<div class='bericht' style='rotate: {$draaing}deg'>";
            echo "<p>$bericht</p>";
            echo "<small>Geplaast op: $datum<br>Door: $naam </small>";
            if ($gebruikers_id ==$_SESSION["gebruikers_id"]){
                echo "<p><a href='prikbord.php?bericht_id=$bericht_id&verwijder_prompt=True'>Verwijderen</a>  <a href='wijzigenbericht.php?bericht_id=$bericht_id'>Wijzigen</a></p>";
            }
            echo "</div>";
        }



    ?>
        </div>


</body>
</html>