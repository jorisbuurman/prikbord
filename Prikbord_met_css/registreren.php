<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
    <link rel="stylesheet" href="inlogpaginas.css">
</head>
<body class="box">
    <h1   class= "title" >Registreren</h1>
    <?php
        if (isset($_GET["wachtwoord_fout"])){
            $Probeerstatus = $_GET["wachtwoord_fout"];
            if ($Probeerstatus = true){
                echo "<div class='wachtwoord_fout'>";
                echo "<h1> De wachtwoorden kloppen niet met elkaar </h1><br>";
                echo "<h1><a href='registreren.php'>Oke</a></h1>";
                echo "</div>";
            }
        }
    ?>
    <div class="invullen">
        <form action="nieuwgebruiker.php" method="post"> 
            <input type="text" name="Gebruikersnaam" placeholder="Gerbruikersnaam">
            <input type="text" name="Naam" placeholder="Naam">
            <input type="password" name="Wachtwoord" placeholder="Wachtwoord">
            <input type="password" name="Wachtwoord2" placeholder="Herhaal wachtwoord">
            <input type="submit" value="Registeren">
        </form>

        <a href="login.php">Heeft u al een account?</a>
        <a href="index.php">Terug</a>
    </div>


</body>
</html>