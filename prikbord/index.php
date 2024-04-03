<?php
    if (isset($_GET["accountverwijdert"])){
        echo "<div class='wachtwoord_fout'>";
        echo "<h1> U heeft uw acount en berichten sucsess vol verwijdert </h1><br>";
        echo "<h1><a href='index.php'>Oke</a></h1>";
        echo "</div>";

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikbord</title>
    <link rel="stylesheet" href="voorpaginastijl.css">
</head >
<body>
    <div class="box">
        <h1 class= "title_groot"> Joris zijn prik bord</h1>
    
        <p class="opties"><a href="login.php">Inloggen</a>  <a href="registreren.php">Registreren</a></p> 
    </div>
</body>
</html>