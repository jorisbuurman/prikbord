<?php

    session_start();
    if (!isset($_SESSION["gebruikers_id"])) {
        header("Location: index.php");
    }


    include "db.php";
    $gebruikers_id = $_SESSION["gebruikers_id"];

    if (isset($_POST["verniewde bericht"])){
        $verandering = $_POST["verniewde bericht"];
        $bericht_id = $_GET["bericht_id"];
        $query = "UPDATE `berichten` SET `bericht` = '$verandering' WHERE `bericht`.`bericht_id` = $bericht_id";
        $resultaten = mysqli_query($verbinding, $query);
        header("Location: account.php");
    }else{
        header("Location: wijzigenbericht.php");
    }







?>
