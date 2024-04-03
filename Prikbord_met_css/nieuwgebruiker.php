<?php

include "db.php";

$gebruikersnaam =  $_POST["Gebruikersnaam"];
$wachtwoord =$_POST["Wachtwoord"];
$naam =$_POST["Naam"];
$wachtwoord2 =$_POST["Wachtwoord2"];

if ($wachtwoord == $wachtwoord2 and strlen($gebruikersnaam) > 3  and strlen($wachtwoord) > 3){
    
    $query = "INSERT INTO `gebruikers` (`gebruikers_id`, `gebruikersnaam`, `wachtwoord`, `naam`) VALUES (NULL, '$gebruikersnaam', '$wachtwoord', '$naam')";
    mysqli_query($verbinding, $query);

    header("location: auth.php?gebruikersnaam=$gebruikersnaam&wachtwoord=$wachtwoord");
}else{
    header("location: registreren.php?wachtwoord_fout=True");
}

?>