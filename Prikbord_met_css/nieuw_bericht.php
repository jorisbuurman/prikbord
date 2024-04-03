<?php
    session_start();
    if (!isset($_SESSION["gebruikers_id"])) {
        header("Location: index.php");
    }

    if (isset($_GET["bericht"])) {

        include "db.php";

        $bericht = $_GET["bericht"];
        $gebruikers_id = $_SESSION["gebruikers_id"];

        $quary = "INSERT INTO `berichten` (`bericht_id`, `bericht`, `datum`, `gebruikers_id`) VALUES (NULL, '$bericht', current_timestamp(), '$gebruikers_id')";
        mysqli_query($verbinding, $quary);
        
        header("Location: prikbord.php");

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="inlogpaginas.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuw bericht</title>
</head>
<body class="box">
    <h2 class="title">Bericht toevoegen</h2>
    <div class="bericht">
        <form>
            <textarea name="bericht" rows=8 cols=32 placeholder="Type hier uw bericht" ></textarea>
            <br>
            <input type="submit" value="Bericht prikken">
        </form>
    </div>
    <div class="knoppen">
        <p><a href="prikbord.php">Terug naar prikbord</a></p>
    </div>
</body>
</html>