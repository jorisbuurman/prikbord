<?php
    session_start();
    if (!isset($_SESSION["gebruikers_id"])) {
        header("Location: index.php");
    }    
    if (isset($_GET["verwijder_prompt"])){
        $wijzig1 = $_GET["gebruikersgewijzigd"];
        $wijzig2 = $_GET["naamgewijzigd"];
        $wijzig3 = $_GET["Wachtwoordgewijzigd"];
        
        if ($wijzig1 == true){
            $wijzing = "gebruikersnaam";
        }elseif ($wijzig2 == true){
            $wijzing = "naam";
        }elseif ($wijzig3 == true){
            $wijzing = "wachtwoord";
        }else{
            header("Location: account.php");
        }
        echo "<div class='verwijder'>";
        echo "<h1> U heeft uw $wijzing verandert </h1>";
        echo "<h1><a href='account.php'>Oke</a></h1>";
        echo "</div>";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>account wijzigen</title>
    <link rel="stylesheet" href="inlogpaginas.css">

</head>
<body class="box_lang">
    <h1 class="title"> Account informatie </h1>
    <h2 class="kopje"> Gebruikersnaam wijzigen </h2>
    <div class="account">
        <?php
            include "db.php";
            $gebruikers_id = $_SESSION["gebruikers_id"];

            $query = "SELECT * FROM gebruikers where gebruikers_id = $gebruikers_id";
            $resultaat = mysqli_query($verbinding, $query);
            $rij = mysqli_fetch_array($resultaat);
            $gebruikersnaam = $rij["gebruikersnaam"];
            
            echo "<h3 class='kopje'>Uw gebruikersnaam: $gebruikersnaam </h3>";
        ?>
        <form action="veranderingen.php" method="post">       
            <input type="text" name="Gebruikersnaamwijzigen" placeholder="Nieuwe gebruikersnaam">
            <input type="password" name="Wachtwoord" placeholder="Wachtwoord">
            <input type="submit" value="Verander gebruikersnaam">
        </form>
        <br>
    </div>

    <h2 class="kopje"> Naam wijzigen </h2>
    <div class="account">
        <?php
            $naam = $rij["naam"];
            echo "<h3 class='kopje'>Uw naam: $naam </h3>"
        ?>
        <form action="veranderingen.php" method="post"> 
            <input type="text" name="naamwijzigen" placeholder="Nieuwe naam" >
            <input type="password" name="Wachtwoord" placeholder="Wachtwoord">
            <input type="submit" value="Verander naam">
        </form>
    </div>

    <h2 class="kopje"> Wachtwoord wijzigen </h2>
    <div class="account">
        <form action="veranderingen.php" method="post"> 
            <input type="password" name="Wachtwoord" placeholder="Wachtwoord">
            <input type="password" name="NieuwWachtwoord" placeholder="Nieuw wachtwoord">
            <input type="password" name="NieuwWachtwoord2" placeholder="Herhaal nieuw wachtwoord">
            <input type="submit" value="Verander wachtwoord">
        </form>
    </div>
    
    <h3 class="kopje"> Account verwijderen? </h3>

    <div class="knoppen">
        <p><a  class= "vac" href="accountverwijderen.php">Account verwijderen</a></p>
        <br>
        <p><a href="prikbord.php">Terug naar prikbord</a></p>
    </div>
    
</body>
</html>