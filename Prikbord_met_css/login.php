<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="inlogpaginas.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    

</head>
<body class="box">
    <h1  class= "title">Inloggen</h1>

    <?php
        if (isset($_GET["fout"])){
            $Probeerstatus = $_GET["fout"];
            if ($Probeerstatus = true){
                echo "<div class='wachtwoord_fout'>";
                echo "<h1> Uw wachtwoord of gebruikersnaam klopt niet </h1><br>";
                echo "<h1><a href='login.php'>Oke</a></h1>";
                echo "</div>";
            }
        }
    ?>
    <div class="invullen">
        <form action="auth.php" method="post"> 
            <input type="text" name="Gebruikersnaam" placeholder="Gerbruikersnaam" >
            <input type="password" name="Wachtwoord" placeholder="Wachtwoord">
            <input type="submit" value="Inloggen" class = "knop">
        </form>
        
        <p><a href="registreren.php" class= terug>Heeft u nog geen acount?</a></p>
        <a href="index.php">Terug</a>
    </div>


</body>
</html>