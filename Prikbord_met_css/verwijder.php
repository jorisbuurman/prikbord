<?php

    session_start();
    if (!isset($_SESSION["gebruikers_id"])) {
        header("Location: index.php");
    }

    include "db.php";

    $bericht_id = $_GET["bericht_id"];
    $query = "DELETE FROM berichten WHERE bericht_id=$bericht_id";

    mysqli_query($verbinding, $query);

    header("Location: prikbord.php")

    


?>

