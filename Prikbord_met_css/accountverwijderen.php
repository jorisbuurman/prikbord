<?php
    session_start();
    if (!isset($_SESSION["gebruikers_id"])) {
        header("Location: index.php");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verwijderaccount</title>
    <link rel="stylesheet" href="inlogpaginas.css">
</head>
<body class="box">
    
    <h1 class="title"> Weet u het zeker?<br>Als u dit doet verwijdert u gelijk al uw berichten? </h1>
    <div class='invullen'>
        <form action="veranderingen.php" method="post"> 
            <input type="text" name="verwijderGebruikersnaam" placeholder="Gebruikersnaam" >
            <input type="password" name="verwijderWachtwoord" placeholder="Wachtwoord">
            <input type="submit" value="Verwijderaccount">
        </form>

        
            
        <p><a href='account.php'>Annuleren</a> 
        <a href='prikbord.php'>Terug naar Prikbord</a></p>;
    </div>";

</body>
</html>