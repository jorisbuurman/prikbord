<?php


$server = "localhost";
$gebruikersnaam = "ne122579";
$wachtwoord = "LBjYdOgqzW";
$database = "ne122579_1";

$verbinding = mysqli_connect($server, $gebruikersnaam, $wachtwoord, $database);

if (!$verbinding){
    die("Er is een fout in de verbinding met de database!");
}


?>