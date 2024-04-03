<?php
    if (isset($_GET["accountverwijdert"])){
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php?accountverwijdert=True");
    }else{
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php");
    }

    
?>