<?php

    session_start();
    if (!isset($_SESSION["gebruikers_id"])) {
        header("Location: index.php");
    }

    include "db.php";

    $gebruikers_id = $_SESSION["gebruikers_id"];
    $query = "SELECT * FROM gebruikers where gebruikers_id = $gebruikers_id";
    $resultaat = mysqli_query($verbinding, $query);
    $rij = mysqli_fetch_array($resultaat);
    $echtwachtwoord = $rij["wachtwoord"];
    $echtgebruikersnaam = $rij["gebruikersnaam"];

    $wachtwoord =$_POST["Wachtwoord"];

    if (isset($_POST["Gebruikersnaamwijzigen"])){
        $gebruikersnaam =$_POST["Gebruikersnaamwijzigen"];
        if ($wachtwoord == $echtwachtwoord){
            $query = "UPDATE `gebruikers` SET `gebruikersnaam` = '$gebruikersnaam' WHERE `gebruikers`.`gebruikers_id` = $gebruikers_id";
            $resultaten = mysqli_query($verbinding, $query);
            header("Location: account.php?verwijder_prompt=True&naamgewijzigd=False&Wachtwoordgewijzigd=False&gebruikersgewijzigd=True");
        }else{
            header("Location: account.php");
        }
        
    }elseif (isset($_POST["naamwijzigen"])){
        $naam =$_POST["naamwijzigen"];
        if ($wachtwoord == $echtwachtwoord){
            $query3 = "UPDATE `gebruikers` SET `naam` = '$naam' WHERE `gebruikers`.`gebruikers_id` = $gebruikers_id";
            $resultaten = mysqli_query($verbinding, $query3);
            header("Location: account.php?verwijder_prompt=Tru  e&naamgewijzigd=True&Wachtwoordgewijzigd=False&gebruikersgewijzigd=False");
        }else{
            header("Location: account.php");
        }
    }elseif (isset($_POST["NieuwWachtwoord"])){ 
        $NieuwWachtwoord =$_POST["NieuwWachtwoord"];
        $NieuwWachtwoord2 =$_POST["NieuwWachtwoord2"];

        if ($NieuwWachtwoord == $NieuwWachtwoord2 and $wachtwoord == $echtwachtwoord){
            
            $query = "UPDATE `gebruikers` SET `wachtwoord` = '$NieuwWachtwoord' WHERE `gebruikers`.`gebruikers_id` = $gebruikers_id";
            $resultaten = mysqli_query($verbinding, $query);
            header("Location: account.php?verwijder_prompt=True&naamgewijzigd=False&Wachtwoordgewijzigd=True&gebruikersgewijzigd=False");
        
        }else{
            header("Location: account.php");
        }


    }elseif (isset($_POST["verwijderWachtwoord"])){
        $vergebruikersnaam =$_POST["verwijderGebruikersnaam"];
        $verwachtwoord =$_POST["verwijderWachtwoord"];

        if ($verwachtwoord == $echtwachtwoord and $vergebruikersnaam == $echtgebruikersnaam){
            $query = "DELETE FROM gebruikers WHERE gebruikers_id = $gebruikers_id";
            $resultaten = mysqli_query($verbinding, $query);
            header("Location: loguit.php?accountverwijdert=True");
        }else{
            header("Location: accountverwijderen.php");
        }
        
    }else{
        header("Location: account.php");
    }
    

?>