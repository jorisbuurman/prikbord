<?php

include "db.php";

if (isset($_POST["Gebruikersnaam"])){
    $gebruikersnaam =  $_POST["Gebruikersnaam"];
    $wachtwoord =$_POST["Wachtwoord"];
}
if (isset($_GET["gebruikersnaam"])){
    $gebruikersnaam = $_GET["gebruikersnaam"];
    $wachtwoord = $_GET["wachtwoord"];
}else{
    header("Location: inlogin.php");
}

$query = "SELECT * FROM gebruikers WHERE gebruikersnaam = '$gebruikersnaam' AND wachtwoord = '$wachtwoord'";
$resultaten = mysqli_query($verbinding, $query);
$aantal = mysqli_num_rows($resultaten);

if ($aantal == 1) {
    $rij = mysqli_fetch_array($resultaten);
    session_start();
    $_SESSION["gebruikers_id"] = $rij["gebruikers_id"];
    header("Location: prikbord.php");
}else {
    header("Location: login.php?fout=True");
}

?>