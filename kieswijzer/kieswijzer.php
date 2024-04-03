<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krijgsmachtenwijzer</title>
    <link rel="stylesheet" href="kieswijzer.css">
    
</head>
<body>

    <h1>De Kijrgsmachtenwijzer</h1>

    <?php
        //punten
        $lucht = 0;
        $marine = 0;
        $land = 0;
        $marsh = 0;
        $gvraag =0;
        // opmaak vars
        $geselcteerd1 = 'nietgekozen';
        $geselcteerd2 = 'nietgekozen';
        $geselcteerd3 = 'nietgekozen';
        $geselcteerd4 = 'nietgekozen';
    

        echo "<div class='box'>";
        if (isset($_GET["vraag"])){
            $vraagnummer = $_GET['vraag'];
            $ant1 = $_GET["v1"];
            $ant2 = $_GET["v2"];
            $ant3 = $_GET["v3"];
            $ant4 = $_GET["v4"];
            $ant5 = $_GET["v5"];
            $ant6 = $_GET["v6"];
            $ant7 = $_GET["v7"];
            $ant8 = $_GET["v8"];
            $ant9 = $_GET["v9"];
            if (isset($_GET["T"])){
                $vorigevraag= $_GET["T"];
            }else{
                $vorigevraag = 0;
            }
                  
            if ($vraagnummer==1){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }   
                }
                
                if ($ant1 ==0){

                    echo "<h2>Waar heb je een voorkeur aan?</h2>";
                    echo "<a href='kieswijzer.php?vraag=1&keuze=1&v1=0&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd1'>Op jezelf aangewezen zijn</a></br>";
                    echo "<a href='kieswijzer.php?vraag=1&keuze=2&v1=0&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd2'>Op een voertuig aangewezen zijn</a></br>";

                    if (isset($_GET["keuze"])){
                        $keuze = $_GET["keuze"];
                        if ($keuze == 1){ 
                            echo "<a href='kieswijzer.php?vraag=2&v1=1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";
                        }else if ($keuze == 2){
                            echo "<a href='kieswijzer.php?vraag=2&v1=2&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";                                         
                        }
                    }else {
                        echo "<a href='kieswijzer.php?vraag=2&v1=0&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Vraag overslaan</a>";
                    }

                }elseif ($ant1==1){
                    header("location: kieswijzer.php?vraag=1&keuze=1&v1=0&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9");
                }elseif ($ant1==2){
                    header("location: kieswijzer.php?vraag=1&keuze=2&v1=0&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9");
                } 


            }if ($vraagnummer==2){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }   
                }
                if ($ant2==0){
                    echo "<h2>Wat regel je liever?</h2>";
                    echo "<a href='kieswijzer.php?vraag=2&keuze=1&v1=$ant1&v2=0&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd1'>Transporteren van goederen en mensen</a></br>";
                    echo "<a href='kieswijzer.php?vraag=2&keuze=2&v1=$ant1&v2=0&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd2'>Burgers beschermen van onrecht</a></br>";

                    if (isset($_GET["keuze"])){
                        $keuze = $_GET["keuze"];
                        if ($keuze == 1){ 
                            echo "<a href='kieswijzer.php?vraag=3&v1=$ant1&v2=1&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";
                        }else if ($keuze == 2){
                            echo "<a href='kieswijzer.php?vraag=3&v1=$ant1&v2=2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";                                         
                        }
                    }else {
                        echo "<a href='kieswijzer.php?vraag=2&v1=$ant1&v2=0&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Vraag overslaan</a>";
                    }
                    echo "<br><a href='kieswijzer.php?vraag=1&v1=$ant1&v2=$vorigevraag&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Vorige vraag</a>";

                }elseif ($ant2==1){
                    header("location: kieswijzer.php?vraag=2&keuze=1&v1=$ant1&v2=0&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=1");
                }elseif ($ant2==2){
                    header("location: kieswijzer.php?vraag=2&keuze=2&v1=$ant1&v2=02&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=2");
                } 
                
                
            }if ($vraagnummer==3){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }else if ($keuze == 3){
                        $geselcteerd3 = 'gekozen';
                    }else if ($keuze == 4){
                        $geselcteerd4 = 'gekozen';
                    }   
                }
                if ($ant3==0){
                    echo "<h2>Waar maak je het liefst gebruik van?</h2>";
                    echo "<a href='kieswijzer.php?vraag=3&keuze=1&v1=$ant1&v2=$ant2&v3=0&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd1'>Een boot</a></br>";
                    echo "<a href='kieswijzer.php?vraag=3&keuze=2&v1=$ant1&v2=$ant2&v3=0&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd2'>Een vliegtuig/helicopter</a></br>";
                    echo "<a href='kieswijzer.php?vraag=3&keuze=3&v1=$ant1&v2=$ant2&v3=0&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd3'>Een tank, vrachtwagen</a></br>";
                    echo "<a href='kieswijzer.php?vraag=3&keuze=4&v1=$ant1&v2=$ant2&v3=0&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd4'>Auto's, honden </a></br>";

                    if (isset($_GET["keuze"])){
                        $keuze = $_GET["keuze"];
                        if ($keuze == 1){ 
                            echo "<a href='kieswijzer.php?vraag=4&v1=$ant1&v2=$ant2&v3=1&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";
                        }else if ($keuze == 2){
                            echo "<a href='kieswijzer.php?vraag=4&v1=$ant1&v2=$ant2&v3=2&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";                                         
                        }else if ($keuze == 3){
                            echo "<a href='kieswijzer.php?vraag=4&v1=$ant1&v2=$ant2&v3=3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";                                         
                        }else if ($keuze == 4){
                            echo "<a href='kieswijzer.php?vraag=4&v1=$ant1&v2=$ant2&v3=4&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";                                         
                        }
                    }else {
                        echo "<a href='kieswijzer.php?vraag=4&v1=$ant1&v2=$ant2&v3=0&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Vraag overslaan</a>";
                    }
                    echo "<br><a href='kieswijzer.php?vraag=2&v1=$ant1&v2=$ant2&v3=$vorigevraag&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Vorige vraag</a>";

                }elseif ($ant3==1){
                    header("location: kieswijzer.php?vraag=3&keuze=1&v1=$ant1&v2=$ant2&v3=0&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=1");
                }elseif ($ant3==2){
                    header("location: kieswijzer.php?vraag=3&keuze=2&v1=$ant1&v2=$ant2&v3=0&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=2");
                }elseif ($ant3==3){
                    header("location: kieswijzer.php?vraag=3&keuze=3&v1=$ant1&v2=$ant2&v3=0&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=3");
                }elseif ($ant3==4){
                    header("location: kieswijzer.php?vraag=3&keuze=4&v1=$ant1&v2=$ant2&v3=0&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=4");
                } 
                
                
            }if ($vraagnummer==4){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }else if ($keuze == 3){
                        $geselcteerd3 = 'gekozen';
                    }   
                }
                if ($ant4==0){
                    echo "<h2>Welk type omgeving spreekt jou het meest aan?</h2>";
                    echo "<a href='kieswijzer.php?vraag=4&keuze=1&v1=$ant1&v2=$ant2&v3=$ant3&v4=0&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd1'>Lucht fascineert me en ik ben fan van grote ruimtes en het luchtruim</a></br>";
                    echo "<a href='kieswijzer.php?vraag=4&keuze=2&v1=$ant1&v2=$ant2&v3=$ant3&v4=0&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd2'>Water trekt me aan en ik hou van ervan om op zee te zijn.</a></br>";
                    echo "<a href='kieswijzer.php?vraag=4&keuze=3&v1=$ant1&v2=$ant2&v3=$ant3&v4=0&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd3'>Mijn voorkeur ligt aan omgeving van het land en ik voel me fijner op vast land</a></br>";

                    if (isset($_GET["keuze"])){
                        $keuze = $_GET["keuze"];
                        if ($keuze == 1){ 
                            echo "<a href='kieswijzer.php?vraag=5&v1=$ant1&v2=$ant2&v3=$ant3&v4=1&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";
                        }else if ($keuze == 2){
                            echo "<a href='kieswijzer.php?vraag=5&v1=$ant1&v2=$ant2&v3=$ant3&v4=2&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";                                         
                        }else if ($keuze == 3){
                            echo "<a href='kieswijzer.php?vraag=5&v1=$ant1&v2=$ant2&v3=$ant3&v4=3&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";                                         
                        }
                    }else {
                        echo "<a href='kieswijzer.php?vraag=5&v1=$ant1&v2=$ant2&v3=$ant3&v4=0&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Vraag overslaan</a>";
                    }
                    echo "<br><a href='kieswijzer.php?vraag=3&v1=$ant1&v2=$ant2&v3=$ant3&v4=$vorigevraag&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Vorige vraag</a>";

                }elseif ($ant4==1){
                    header("location: kieswijzer.php?vraag=4&keuze=1&v1=$ant1&v2=$ant2&v3=$ant3&v4=0&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=1");
                }elseif ($ant4==2){
                    header("location: kieswijzer.php?vraag=4&keuze=2&v1=$ant1&v2=$ant2&v3=$ant3&v4=0&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=2");
                }elseif ($ant4==3){
                    header("location: kieswijzer.php?vraag=4&keuze=3&v1=$ant1&v2=$ant2&v3=$ant3&v4=0&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=3");
                }
                
                
            }if ($vraagnummer==5){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }else if ($keuze == 3){
                        $geselcteerd3 = 'gekozen';
                    }else if ($keuze == 4){
                        $geselcteerd4 = 'gekozen';
                    }   
                }
                if ($ant5==0){
                    echo "<h2>Wat is jouw ideale werkomgeving?</h2>";
                    echo "<a href='kieswijzer.php?vraag=5&keuze=1&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=0&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd1'>Buiten, in diverse omstandigheden.</a></br>";
                    echo "<a href='kieswijzer.php?vraag=5&keuze=2&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=0&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd2'>In een high-tech omgeving met geavanceerde apparatuur.</a></br>";
                    echo "<a href='kieswijzer.php?vraag=5&keuze=3&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=0&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd3'>Op of onder de zee.</a></br>";
                    echo "<a href='kieswijzer.php?vraag=5&keuze=4&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=0&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd4'>Overal waar er behoefte is aan stabiliteit en veiligheid.</a></br>";

                    if (isset($_GET["keuze"])){
                        $keuze = $_GET["keuze"];
                        if ($keuze == 1){ 
                            echo "<a href='kieswijzer.php?vraag=6&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=1&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";
                        }else if ($keuze == 2){
                            echo "<a href='kieswijzer.php?vraag=6&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=2&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";                                         
                        }else if ($keuze == 3){
                            echo "<a href='kieswijzer.php?vraag=6&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=3&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";                                         
                        }else if ($keuze == 4){
                            echo "<a href='kieswijzer.php?vraag=6&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=4&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";                                         
                        }
                    }else {
                        echo "<a href='kieswijzer.php?vraag=6&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=0&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Vraag overslaan</a>";
                    }
                    echo "<br><a href='kieswijzer.php?vraag=4&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$vorigevraag&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Vorige vraag</a>";

                }elseif ($ant5==1){
                    header("location: kieswijzer.php?vraag=5&keuze=1&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=0&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=1");
                }elseif ($ant5==2){
                    header("location: kieswijzer.php?vraag=5&keuze=2&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=0&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=2");
                }elseif ($ant5==3){
                    header("location: kieswijzer.php?vraag=5&keuze=3&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=0&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=3");
                }elseif ($ant5==4){
                    header("location: kieswijzer.php?vraag=5&keuze=4&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=0&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9&T=4");
                } 
                
            }if ($vraagnummer==6){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }else if ($keuze == 3){
                        $geselcteerd3 = 'gekozen';
                    }else if ($keuze == 4){
                        $geselcteerd4 = 'gekozen';
                    }   
                }
                if ($ant6==0){
                    echo "<h2>Hoe belangrijk vind je het om regelmatig te reizen voor je werk?</h2>";
                    echo "<a href='kieswijzer.php?vraag=6&keuze=1&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=0&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd1'>Ik vind het leuk om telkens op andere plekken te werk te gaan.</a></br>";
                    echo "<a href='kieswijzer.php?vraag=6&keuze=2&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=0&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd2'>Af en toe reizen is prima, maar het hoeft niet constant te zijn.</a></br>";
                    echo "<a href='kieswijzer.php?vraag=6&keuze=3&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=0&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd3'>Ik geef de voorkeur aan een stabiele locatie voor langere tijd.</a></br>";
                    echo "<a href='kieswijzer.php?vraag=6&keuze=4&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=0&v7=$ant7&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd4'>Ik ben comfortabel met kortstondige reizen voor missies, maar niet constant.</a></br>";

                    if (isset($_GET["keuze"])){
                        $keuze = $_GET["keuze"];
                        if ($keuze == 1){ 
                            echo "<a href='kieswijzer.php?vraag=7&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=1&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";
                        }else if ($keuze == 2){
                            echo "<a href='kieswijzer.php?vraag=7&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=2&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";                                         
                        }else if ($keuze == 3){
                            echo "<a href='kieswijzer.php?vraag=7&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=3&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";                                         
                        }else if ($keuze == 4){
                            echo "<a href='kieswijzer.php?vraag=7&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=4&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";                                         
                        }
                    }else {
                        echo "<a href='kieswijzer.php?vraag=7&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=0&v7=$ant7&v8=$ant8&v9=$ant9'>Vraag overslaan</a>";
                    }
                    echo "<br><a href='kieswijzer.php?vraag=5&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$vorigevraag&v7=$ant7&v8=$ant8&v9=$ant9'>Vorige vraag</a>";

                }elseif ($ant6==1){
                    header("location: kieswijzer.php?vraag=6&keuze=1&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=0&v7=$ant7&v8=$ant8&v9=$ant9&T=1");
                }elseif ($ant6==2){
                    header("location: kieswijzer.php?vraag=6&keuze=2&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=0&v7=$ant7&v8=$ant8&v9=$ant9&T=2");
                }elseif ($ant6==3){
                    header("location: kieswijzer.php?vraag=6&keuze=3&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=0&v7=$ant7&v8=$ant8&v9=$ant9&T=3");
                }elseif ($ant6==4){
                    header("location: kieswijzer.php?vraag=6&keuze=4&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=0&v7=$ant7&v8=$ant8&v9=$ant9&T=4");
                } 
                
            }if ($vraagnummer==7){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }else if ($keuze == 3){
                        $geselcteerd3 = 'gekozen';
                    }else if ($keuze == 4){
                        $geselcteerd4 = 'gekozen';
                    }   
                }
                if ($ant7==0){
                    echo "<h2>Wat is jouw reactie op het idee om op onregelmatige uren te werken, inclusief nachtdiensten en weekenddiensten?</h2>";
                    echo "<a href='kieswijzer.php?vraag=7&keuze=1&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=0&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd1'>Geen probleem, ik ben flexibel en kan me aanpassen aan verschillende schema's.</a></br>";
                    echo "<a href='kieswijzer.php?vraag=7&keuze=2&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=0&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd2'>Het is geen ideale situatie, maar ik begrijp dat het soms nodig is.</a></br>";
                    echo "<a href='kieswijzer.php?vraag=7&keuze=3&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=0&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd3'>Ik heb liever een meer voorspelbaar werkschema.</a></br>";
                    echo "<a href='kieswijzer.php?vraag=7&keuze=4&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=0&v8=$ant8&v9=$ant9&T=$vorigevraag' id='$geselcteerd4'>Ik ben bereid om onregelmatige uren te werken als dat nodig is, maar het zou niet mijn voorkeur hebben.</a></br>";

                    if (isset($_GET["keuze"])){
                        $keuze = $_GET["keuze"];
                        if ($keuze == 1){ 
                            echo "<a href='kieswijzer.php?vraag=8&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=1&v8=$ant8&v9=$ant9'>Volgende vraag</a>";
                        }else if ($keuze == 2){
                            echo "<a href='kieswijzer.php?vraag=8&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=2&v8=$ant8&v9=$ant9'>Volgende vraag</a>";                                         
                        }else if ($keuze == 3){
                            echo "<a href='kieswijzer.php?vraag=8&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=3&v8=$ant8&v9=$ant9'>Volgende vraag</a>";                                         
                        }else if ($keuze == 4){
                            echo "<a href='kieswijzer.php?vraag=8&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=4&v8=$ant8&v9=$ant9'>Volgende vraag</a>";                                         
                        }
                    }else {
                        echo "<a href='kieswijzer.php?vraag=8&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=0&v8=$ant8&v9=$ant9'>Vraag overslaan</a>";
                    }
                    echo "<br><a href='kieswijzer.php?vraag=6&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$vorigevraag&v8=$ant8&v9=$ant9'>Vorige vraag</a>";

                }elseif ($ant7==1){
                    header("location: kieswijzer.php?vraag=7&keuze=1&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=0&v8=$ant8&v9=$ant9&T=1");
                }elseif ($ant7==2){
                    header("location: kieswijzer.php?vraag=7&keuze=2&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=0&v8=$ant8&v9=$ant9&T=2");
                }elseif ($ant7==3){
                    header("location: kieswijzer.php?vraag=7&keuze=3&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=0&v8=$ant8&v9=$ant9&T=3");
                }elseif ($ant7==4){
                    header("location: kieswijzer.php?vraag=7&keuze=4&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=0&v8=$ant8&v9=$ant9&T=4");
                } 
            
            }if ($vraagnummer==8){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }else if ($keuze == 3){
                        $geselcteerd3 = 'gekozen';
                    }else if ($keuze == 4){
                        $geselcteerd4 = 'gekozen';
                    }   
                }
                if ($ant8==0){
                    echo "<h2>Hoe comfortabel ben je met het idee om onder extreme omstandigheden te werken, zoals in moeilijk terrein of in extreme weersomstandigheden?</h2>";
                    echo "<a href='kieswijzer.php?vraag=8&keuze=1&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=0&v9=$ant9&T=$vorigevraag' id='$geselcteerd1'>Ik ben volledig comfortabel, ik ben bestand tegen uitdagende omstandigheden.</a></br>";
                    echo "<a href='kieswijzer.php?vraag=8&keuze=2&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=0&v9=$ant9&T=$vorigevraag' id='$geselcteerd2'>Ik kan ermee omgaan, maar het kan soms een uitdaging zijn.</a></br>";
                    echo "<a href='kieswijzer.php?vraag=8&keuze=3&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=0&v9=$ant9&T=$vorigevraag' id='$geselcteerd3'>Ik heb wat ervaring met uitdagende omstandigheden, maar ik geef de voorkeur aan meer gematigde omgevingen.</a></br>";
                    echo "<a href='kieswijzer.php?vraag=8&keuze=4&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=0&v9=$ant9&T=$vorigevraag' id='$geselcteerd4'>Ik ben niet comfortabel met werken onder extreme omstandigheden en geef de voorkeur aan meer gecontroleerde omgevingen.</a></br>";

                    if (isset($_GET["keuze"])){
                        $keuze = $_GET["keuze"];
                        if ($keuze == 1){ 
                            echo "<a href='kieswijzer.php?vraag=9&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=1&v9=$ant9'>Volgende vraag</a>";
                        }else if ($keuze == 2){
                            echo "<a href='kieswijzer.php?vraag=9&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=2&v9=$ant9'>Volgende vraag</a>";                                         
                        }else if ($keuze == 3){
                            echo "<a href='kieswijzer.php?vraag=9&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=3&v9=$ant9'>Volgende vraag</a>";                                         
                        }else if ($keuze == 4){
                            echo "<a href='kieswijzer.php?vraag=9&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=4&v9=$ant9'>Volgende vraag</a>";                                         
                        }
                    }else {
                        echo "<a href='kieswijzer.php?vraag=9&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=0&v9=$ant9'>Vraag overslaan</a>";
                    }
                    echo "<br><a href='kieswijzer.php?vraag=7&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$vorigevraag&v9=$ant9'>Vorige vraag</a>";

                }elseif ($ant8==1){
                    header("location: kieswijzer.php?vraag=8&keuze=1&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=0&v9=$ant9&T=1");
                }elseif ($ant8==2){
                    header("location: kieswijzer.php?vraag=8&keuze=2&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=0&v9=$ant9&T=2");
                }elseif ($ant8==3){
                    header("location: kieswijzer.php?vraag=8&keuze=3&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=0&v9=$ant9&T=3");
                }elseif ($ant8==4){
                    header("location: kieswijzer.php?vraag=8&keuze=4&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=0&v9=$ant9&T=4");
                } 
            
            }if ($vraagnummer==9){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }else if ($keuze == 3){
                        $geselcteerd3 = 'gekozen';
                    }else if ($keuze == 4){
                        $geselcteerd4 = 'gekozen';
                    }   
                }
                if ($ant9==0){
                    echo "<h2>Hoe belangrijk is het voor jou om een actieve rol te spelen in het beschermen van nationale belangen en veiligheid?</h2>";
                    echo "<a href='kieswijzer.php?vraag=9&keuze=1&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=0&T=$vorigevraag' id='$geselcteerd1'>Het is mijn grootste prioriteit, ik ben vastbesloten om mijn land te dienen en te beschermen.</a></br>";
                    echo "<a href='kieswijzer.php?vraag=9&keuze=2&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=0&T=$vorigevraag' id='$geselcteerd2'>Het is belangrijk voor mij, maar ik ben ook geïnteresseerd in andere aspecten van militaire dienst.</a></br>";
                    echo "<a href='kieswijzer.php?vraag=9&keuze=3&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=0&T=$vorigevraag' id='$geselcteerd3'>Ik ben bereid bij te dragen aan nationale veiligheid, maar het is niet mijn enige drijfveer.</a></br>";
                    echo "<a href='kieswijzer.php?vraag=9&keuze=4&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=0&T=$vorigevraag' id='$geselcteerd4'>Ik ben meer gefocust op andere aspecten van militaire dienst dan alleen de bescherming van nationale belangen.</a></br>";

                    if (isset($_GET["keuze"])){
                        $keuze = $_GET["keuze"];
                        if ($keuze == 1){ 
                            echo "<a href='kieswijzer.php?vraag=10&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=1'>Volgende vraag</a>";
                        }else if ($keuze == 2){
                            echo "<a href='kieswijzer.php?vraag=10&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=2'>Volgende vraag</a>";                                         
                        }else if ($keuze == 3){
                            echo "<a href='kieswijzer.php?vraag=10&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=3'>Volgende vraag</a>";                                         
                        }else if ($keuze == 4){
                            echo "<a href='kieswijzer.php?vraag=10&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=4'>Volgende vraag</a>";                                         
                        }
                    }else {
                        echo "<a href='kieswijzer.php?vraag=10&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=0'>Vraag overslaan</a>";
                    }
                    echo "<br><a href='kieswijzer.php?vraag=8&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$vorigevraag'>Vorige vraag</a>";

                }elseif ($ant9==1){
                    header("location: kieswijzer.php?vraag=9&keuze=1&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=0&T=1");
                }elseif ($ant9==2){
                    header("location: kieswijzer.php?vraag=9&keuze=2&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=0&T=2");
                }elseif ($ant9==3){
                    header("location: kieswijzer.php?vraag=9&keuze=3&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=0&T=3");
                }elseif ($ant9==4){
                    header("location: kieswijzer.php?vraag=9&keuze=4&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=0&T=4");
                } 
            
            }if ($vraagnummer==10){
                if ($ant1==1){
                    $land+=1;
                    $marsh+=1;
                    $gvraag+=1;
                }elseif ($ant1==2){
                    $lucht +=1;
                    $marine+=1;
                    $gvraag+=1;
                }
                if ($ant2==1){
                    $gvraag+=1;
                    $lucht+=1;
                    $marine+=1;
                }elseif ($ant2==2){
                    $land+=1;
                    $marsh+=1;
                    $gvraag+=1;
                }
                if ($ant3==1){
                    $gvraag+=1;
                    $marine+=1;
                }elseif ($ant3==2){
                    $gvraag+=1;
                    $lucht+=1;
                }elseif ($ant3==3){
                    $gvraag+=1;
                    $land+=1;
                }elseif ($ant3==4){
                    $gvraag+=1;
                    $marsh+=1;
                }
                if ($ant4==1){
                    $gvraag+=1;
                    $lucht+=1;
                }elseif ($ant4==2){
                    $gvraag+=1;
                    $marine+=1;
                }elseif ($ant4==3){
                    $gvraag+=1;
                    $land+=1;
                    $marsh+=1;
                }
                if ($ant5==1){
                    $gvraag+=1;
                    $land+=1;
                }elseif ($ant5==2){
                    $gvraag+=1;
                    $lucht+=1;
                }elseif ($ant5==3){
                    $gvraag+=1;
                    $marine+=1;
                }elseif ($ant5==4){
                    $gvraag+=1;
                    $marsh+=1;
                }
                if ($ant6==1){
                    $gvraag+=1;
                    $lucht+=1;
                }elseif ($ant6==2){
                    $gvraag+=1;
                    $marine+=1;
                }elseif ($ant6==3){
                    $gvraag+=1;
                    $marsh+=1;
                }elseif ($ant6==4){
                    $gvraag+=1;
                    $land+=1;
                }
                if ($ant7==1){
                    $gvraag+=1;
                    $lucht+=1;
                }elseif ($ant7==2){
                    $gvraag+=1;
                    $marine+=1;
                }elseif ($ant7==3){
                    $gvraag+=1;
                    $marsh+=1;
                }elseif ($ant7==4){
                    $gvraag+=1;
                    $land+=1;
                }
                if ($ant8==1){
                    $gvraag+=1;
                    $lucht+=1;
                }elseif ($ant8==2){
                    $gvraag+=1;
                    $marine+=1;
                }elseif ($ant8==3){
                    $gvraag+=1;
                    $marsh+=1;
                }elseif ($ant8==4){
                    $gvraag+=1;
                    $land+=1;
                }
                if ($ant9==1){
                    $gvraag+=1;
                    $lucht+=1;
                }elseif ($ant9==2){
                    $gvraag+=1;
                    $marine+=1;
                }elseif ($ant9==3){
                    $gvraag+=1;
                    $marsh+=1;
                }elseif ($ant9==4){
                    $gvraag+=1;
                    $land+=1;
                }
                $Rlucht = $lucht / $gvraag * 100;
                $Rland = $land / $gvraag * 100;
                $Rmarsh = $marsh / $gvraag * 100;
                $Rmarine = $marine / $gvraag * 100;

                if ($lucht>$land and $lucht>$marine and $lucht>$marsh){
                    $text = "luchtmacht";
                    $link = "krijgsmachten.php?id=luchtmacht";
                }elseif ($land>$lucht and $land>$marine and $land>$marsh){
                    $text = "landmacht";
                    $link = "krijgsmachten.php?id=landmacht";
                }elseif ($marine>$lucht and $marine>$land and $marine>$marsh){
                    $text = "marine";
                    $link = "krijgsmachten.php?id=marine";
                }elseif ($marsh>$lucht and $marsh>$land and $marsh>$marine){
                    $text = "marechaussee";
                    $link = "krijgsmachten.php?id=marechausse";
                }elseif ($marsh=$lucht){
                    $text = "marechaussee en luchtmacht";
                    $link = "krijgsmachten.php";
                }elseif ($land=$lucht){
                    $text = "landmacht en luchtmacht";
                    $link = "krijgsmachten.php";
                }elseif ($marine=$lucht){
                    $text = "marine en luchtmacht";
                    $link = "krijgsmachten.php";
                }elseif ($marsh=$land){
                    $text = "marechaussee en landmacht";
                    $link = "krijgsmachten.php";
                }elseif ($marine=$land){
                    $text = "marine en landmacht";
                    $link = "krijgsmachten.php";
                }elseif ($marine=$marsh){
                    $text = "marine en marechausse";
                    $link = "krijgsmachten.php";
                }else {
                    $text = "3+ krijgsmachten";
                    $link = "krijgsmachten.php";
                }
                echo "<h2>De resultaten!</h2>";
                echo "<p>U heeft het beste gescoord bij de $text</p>";
                
               
                $score= array('luchtmacht'=>$Rlucht,'lantmacht'=>$Rland,'marechaussee'=>$Rmarsh,'marine'=>$Rmarine);
                arsort($score); 
                foreach($score as $x => $x_value) {
                    echo "Uw score bij de " . $x . " = " .round($x_value) ."%";
                    echo "<br>";
                }
                echo "</br><a href='$link'>Lees meer over de $text</a>";
                echo "<br><a href='kieswijzer.php?vraag=9&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Vorige vraag</a>"; 
                echo "<a href='kieswijzer.php?vraag=11&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Antwoorden inzien</a>"; 

            }if ($vraagnummer==11){
                if ($ant1 == 1){
                    $geselcteerd1 ='gekozen';
                }else if ($ant1 == 2){
                    $geselcteerd2 = 'gekozen';
                }

                echo "<h2>Waar heb je een voorkeur aan?</h2>";
                echo "<p id='$geselcteerd1'>Op jezelf aangewezen zijn</p>";
                echo "<p id='ant'>Marechaussee & Landmacht</p>";
                echo "<p id='$geselcteerd2'>Op een voertuig aangewezen zijnMarine en Luchtnmacht</p>";
                echo "<p id='ant'>Marine & Luchtnmacht</p>";

                echo "<a href='kieswijzer.php?vraag=12&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";
                echo "<a href='kieswijzer.php?vraag=10&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de restultaaten</a>";
                echo "<a href='kieswijzer.php?vraag=1&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de vraag</a>";
            }if ($vraagnummer==12){
                if ($ant2 == 1){
                    $geselcteerd1 ='gekozen';
                }else if ($ant2 == 2){
                    $geselcteerd2 = 'gekozen';
                }

                echo "<h2>Wat regel je liever?</h2>";
                echo "<p id='$geselcteerd1'>Transporteren van goederen en mensen</p>";
                echo "<p id='ant'>Marine & Luchtnmacht</p>";
                echo "<p id='$geselcteerd2'>Burgers beschermen van onrecht</p>";
                echo "<p id='ant'>Marechaussee & Landmacht</p>";

                echo "<a href='kieswijzer.php?vraag=13&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";
                echo "<a href='kieswijzer.php?vraag=10&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de restultaaten</a>";
                echo "<a href='kieswijzer.php?vraag=2&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de vraag</a>";
            }if ($vraagnummer==13){
                if ($ant3 == 1){
                    $geselcteerd1 ='gekozen';
                }else if ($ant3 == 2){
                    $geselcteerd2 = 'gekozen';
                }else if ($ant3 == 3){
                    $geselcteerd3 = 'gekozen';
                }else if ($ant3 == 4){
                    $geselcteerd4 = 'gekozen';
                }

                echo "<h2>Waar maak je het liefst gebruik van?</h2>";
                echo "<p id='$geselcteerd1'>Een boot</p>";
                echo "<p id='ant'>Marine</p>";
                echo "<p id='$geselcteerd2'>Een vliegtuig/helicopter</p>";
                echo "<p id='ant'>Luchtmacht</p>";
                echo "<p id='$geselcteerd3'>Een tank, vrachtwagen</p>";
                echo "<p id='ant'>Landmacht</p>";
                echo "<p id='$geselcteerd4'>Auto's, honden</p>";
                echo "<p id='ant'>Marechaussee</p>";

                echo "<a href='kieswijzer.php?vraag=14&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";
                echo "<a href='kieswijzer.php?vraag=10&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de restultaaten</a>";
                echo "<a href='kieswijzer.php?vraag=3&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de vraag</a>";
            }if ($vraagnummer==14){
                if ($ant4 == 1){
                    $geselcteerd1 ='gekozen';
                }else if ($ant4 == 2){
                    $geselcteerd2 = 'gekozen';
                }else if ($ant4 == 3){
                    $geselcteerd3 = 'gekozen';
                }

                echo "<h2>Welk type omgeving spreekt jou het meest aan?</h2>";
                echo "<p id='$geselcteerd1'>Lucht fascineert me en ik ben fan van grote ruimtes en het luchtruim.</p>";
                echo "<p id='ant'>Luchtmacht</p>";
                echo "<p id='$geselcteerd2'>Water trekt me aan en ik hou van ervan om op zee te zijn.</p>";
                echo "<p id='ant'>Marine</p>";
                echo "<p id='$geselcteerd3'>Mijn voorkeur ligt aan omgeving van het land en ik voel me fijner op vast land.</p>";
                echo "<p id='ant'>Landmacht & Marechaussee</p>";

                echo "<a href='kieswijzer.php?vraag=15&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";
                echo "<a href='kieswijzer.php?vraag=10&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de restultaaten</a>";
                echo "<a href='kieswijzer.php?vraag=4&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de vraag</a>";
            }if ($vraagnummer==15){
                if ($ant5 == 1){
                    $geselcteerd1 ='gekozen';
                }else if ($ant5 == 2){
                    $geselcteerd2 = 'gekozen';
                }else if ($ant5== 3){
                    $geselcteerd3 = 'gekozen';
                }else if ($ant5 == 4){
                    $geselcteerd4 = 'gekozen';
                }
                echo "<h2>Wat is jouw ideale werkomgeving?</h2>";
                echo "<p id='$geselcteerd1'>Buiten, in diverse omstandigheden</p>";
                echo "<p id='ant'>Landmacht</p>";
                echo "<p id='$geselcteerd2'>In een high-tech omgeving met geavanceerde apparatuur.</p>";
                echo "<p id='ant'>Luchtmacht</p>";
                echo "<p id='$geselcteerd3'>Op of onder de zee.</p>";
                echo "<p id='ant'>Marine</p>";
                echo "<p id='$geselcteerd4'>Overal waar er behoefte is aan stabiliteit en veiligheid</p>";
                echo "<p id='ant'>Marechaussee</p>";

                echo "<a href='kieswijzer.php?vraag=16&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";
                echo "<a href='kieswijzer.php?vraag=10&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de restultaaten</a>";
                echo "<a href='kieswijzer.php?vraag=5&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de vraag</a>";
            }if ($vraagnummer==16){
                if ($ant6 == 1){
                    $geselcteerd1 ='gekozen';
                }else if ($ant6 == 2){
                    $geselcteerd2 = 'gekozen';
                }else if ($ant6== 3){
                    $geselcteerd3 = 'gekozen';
                }else if ($ant6 == 4){
                    $geselcteerd4 = 'gekozen';
                }
                echo "<h2>Hoe belangrijk vind je het om regelmatig te reizen voor je werk?</h2>";
                echo "<p id='$geselcteerd1'>Ik vind het leuk om telkens op andere plekken te werk te gaan.</p>";
                echo "<p id='ant'>Luchtmacht</p>";
                echo "<p id='$geselcteerd2'>Af en toe reizen is prima, maar het hoeft niet constant te zijn.</p>";
                echo "<p id='ant'>Marine</p>";
                echo "<p id='$geselcteerd3'>Ik geef de voorkeur aan een stabiele locatie voor langere tijd.</p>";
                echo "<p id='ant'>Marechaussee</p>";
                echo "<p id='$geselcteerd4'>Ik ben comfortabel met kortstondige reizen voor missies, maar niet constant.</p>";
                echo "<p id='ant'>Landmacht</p>";

                echo "<a href='kieswijzer.php?vraag=17&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";
                echo "<a href='kieswijzer.php?vraag=10&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de restultaaten</a>";
                echo "<a href='kieswijzer.php?vraag=6&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de vraag</a>";
            }if ($vraagnummer==17){
                if ($ant7 == 1){
                    $geselcteerd1 ='gekozen';
                }else if ($ant7 == 2){
                    $geselcteerd2 = 'gekozen';
                }else if ($ant7== 3){
                    $geselcteerd3 = 'gekozen';
                }else if ($ant7 == 4){
                    $geselcteerd4 = 'gekozen';
                }
                echo "<h2>Wat is jouw reactie op het idee om op onregelmatige uren te werken, inclusief nachtdiensten en weekenddiensten?</h2>";
                echo "<p id='$geselcteerd1'>Geen probleem, ik ben flexibel en kan me aanpassen aan verschillende schema's.</p>";
                echo "<p id='ant'>Luchtmacht</p>";
                echo "<p id='$geselcteerd2'>Het is geen ideale situatie, maar ik begrijp dat het soms nodig is.</p>";
                echo "<p id='ant'>Marine</p>";
                echo "<p id='$geselcteerd3'>Ik heb liever een meer voorspelbaar werkschema.</p>";
                echo "<p id='ant'>Marechaussee</p>";
                echo "<p id='$geselcteerd4'>Ik ben bereid om onregelmatige uren te werken als dat nodig is, maar het zou niet mijn voorkeur hebben.</p>";
                echo "<p id='ant'>Landmacht</p>";

                echo "<a href='kieswijzer.php?vraag=18&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";
                echo "<a href='kieswijzer.php?vraag=10&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de restultaaten</a>";
                echo "<a href='kieswijzer.php?vraag=7&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de vraag</a>";
            }if ($vraagnummer==18){
                if ($ant8 == 1){
                    $geselcteerd1 ='gekozen';
                }else if ($ant8 == 2){
                    $geselcteerd2 = 'gekozen';
                }else if ($ant8== 3){
                    $geselcteerd3 = 'gekozen';
                }else if ($ant8 == 4){
                    $geselcteerd4 = 'gekozen';
                }
                echo "<h2>Hoe comfortabel ben je met het idee om onder extreme omstandigheden te werken, zoals in moeilijk terrein of in extreme weersomstandigheden?</h2>";
                echo "<p id='$geselcteerd1'>Ik ben volledig comfortabel, ik ben bestand tegen uitdagende omstandigheden.</p>";
                echo "<p id='ant'>Luchtmacht</p>";
                echo "<p id='$geselcteerd2'>Ik kan ermee omgaan, maar het kan soms een uitdaging zijn.</p>";
                echo "<p id='ant'>Marine</p>";
                echo "<p id='$geselcteerd3'>Ik heb wat ervaring met uitdagende omstandigheden, maar ik geef de voorkeur aan meer gematigde omgevingen.</p>";
                echo "<p id='ant'>Marechaussee</p>";
                echo "<p id='$geselcteerd4'>Ik ben niet comfortabel met werken onder extreme omstandigheden en geef de voorkeur aan meer gecontroleerde omgevingen.</p>";
                echo "<p id='ant'>Landmacht</p>";

                echo "<a href='kieswijzer.php?vraag=19&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";
                echo "<a href='kieswijzer.php?vraag=10&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de restultaaten</a>";
                echo "<a href='kieswijzer.php?vraag=8&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de vraag</a>";
            }if ($vraagnummer==19){
                if ($ant9 == 1){
                    $geselcteerd1 ='gekozen';
                }else if ($ant9 == 2){
                    $geselcteerd2 = 'gekozen';
                }else if ($ant9== 3){
                    $geselcteerd3 = 'gekozen';
                }else if ($ant9 == 4){
                    $geselcteerd4 = 'gekozen';
                }
                echo "<h2>Hoe belangrijk is het voor jou om een actieve rol te spelen in het beschermen van nationale belangen en veiligheid?</h2>";
                echo "<p id='$geselcteerd1'>Het is mijn grootste prioriteit, ik ben vastbesloten om mijn land te dienen en te beschermen.</p>";
                echo "<p id='ant'>Luchtmacht</p>";
                echo "<p id='$geselcteerd2'>Het is belangrijk voor mij, maar ik ben ook geïnteresseerd in andere aspecten van militaire dienst.</p>";
                echo "<p id='ant'>Marine</p>";
                echo "<p id='$geselcteerd3'>Ik ben bereid bij te dragen aan nationale veiligheid, maar het is niet mijn enige drijfveer.</p>";
                echo "<p id='ant'>Marechaussee</p>";
                echo "<p id='$geselcteerd4'>Ik ben meer gefocust op andere aspecten van militaire dienst dan alleen de bescherming van nationale belangen.</p>";
                echo "<p id='ant'>Landmacht</p>";

                echo "<a href='kieswijzer.php?vraag=20&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Volgende vraag</a>";
                echo "<a href='kieswijzer.php?vraag=10&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de restultaaten</a>";
                echo "<a href='kieswijzer.php?vraag=9&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de vraag</a>";
            }if ($vraagnummer==20){
                echo "<h2>Einde van de Krijgsmachtenwijzer</h2>";
                echo "<a href='kieswijzer.php?vraag=10&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Terug naar de restultaaten</a></br>";
                echo "<a href='kieswijzer.php?vraag=19&v1=$ant1&v2=$ant2&v3=$ant3&v4=$ant4&v5=$ant5&v6=$ant6&v7=$ant7&v8=$ant8&v9=$ant9'>Vorige vraag</a></br>";
                echo "<a href='kieswijzer.php'>Doe de krijsmachten wijzer opnieuw</a></br>";

            }

        }else{
            echo "<h2>Welkom bij de Krijgsmachtenwijzer.</h2>";
            echo "<h3>In deze quiz zal je vragen krijgen over wat je leuk en benangelijk vind aan de hand hiervan wordt er een krijgsmacht aangeraden.</h3>";
            echo "<a href='kieswijzer.php?vraag=1&v1=0&v2=0&v3=0&v4=0&v5=0&v6=0&v7=0&v8=0&v9=0'>Begin de Krijgsmachtenwijzer!</a>";
        }
        echo "</div>"

    ?>
    
</body>
</html>