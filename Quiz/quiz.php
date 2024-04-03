<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
    <h1 id=""> De selectie Quiz</h1>
    <?php
        echo "<div class='box'>";
        if (isset($_GET["vraag"])){
            $geselcteerd1 = 'nietgekozen';
            $geselcteerd2 = 'nietgekozen';
            $geselcteerd3 = 'nietgekozen';
            $geselcteerd4 = 'nietgekozen';
            $geselcteerd5 = 'nietgekozen';
            $geselcteerd6 = 'nietgekozen';
            $geselcteerd7 = 'nietgekozen';
            $geselcteerd8 = 'nietgekozen';
            $weg = 'keuze';
            $weg2 = 'keuze';
            $vraagnummer = $_GET["vraag"];   

            if ($vraagnummer == 1 ){               
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }   
                    if (isset($_GET["antwoord"])){
                        $weg = 'weg';
                        if ($keuze == 1){
                            $geselcteerd2 ='weg';
                        }else if ($keuze == 2){
                            $geselcteerd1 = 'weg';
                        }   
                    }
                }
                echo "<h2 id= 'vraag'>Voldoet u aan deze eisen?</h2>";
                echo "<p>Ik heb een nederlandse paspoort.</br>
                Ik ben tegen corona gevaccineerd.</br>
                Ik ben ouder dan 18 en jonger dan 28.</br>
                Ik ben langer dan 152 centimeter.</br>
                Ik heb een middelbare school diploma of hoger.</br></br><p>";
                echo "<a href='quiz.php?vraag=1&keuze=1' id='$geselcteerd1'>Ja ik voldoe aan de volgende voorwaarde</a></br>";
                echo "<a href='quiz.php?vraag=1&keuze=2' id='$geselcteerd2'>Nee ik voldoe niet aan de volgende voorwaarde</a></br></br>";
                

                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        echo "<a href='quiz.php?vraag=1&keuze=1&antwoord=1' id='$weg'>Volgende</a>";
                    }else if ($keuze == 2){
                        echo "<a href='quiz.php?vraag=1&keuze=2&antwoord=1' id='$weg'?>Volgende</a>";
                    }
                    if (isset($_GET["antwoord"])){
                        if ($keuze == 1){
                            echo "<p>U voldoet aan de eisen om mee te doen aan het dienjaar!<p>";
                            echo "<a href='quiz.php?vraag=2'>Volgende vraag</a>";
            
                        }else if ($keuze == 2){
                            echo "<p>U moet voldoen aan deze eisen om mee te doen aan het dienjaar</br><p>";
                            echo "<a href='quiz.php?vraag=2'>Volgende vraag</a>";
                        }
                    } 
                    echo "</br></br><a href='quiz.php?vraag=1'>Terug</a>";
                }
                
            }if ($vraagnummer == 2){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }   
                    if (isset($_GET["antwoord"])){
                        $weg = 'weg';
                        if ($keuze == 1){
                            $geselcteerd2 ='weg';
                        }else if ($keuze == 2){
                            $geselcteerd1 = 'weg';
                        }   
                    }
                }

                echo "<h2 id= 'vraag'>Heeft u een rijbewijs?</h2>";
                echo "<a href='quiz.php?vraag=2&keuze=1' id='$geselcteerd1'>Ja ik heb mijn rijbewijs</a></br>";
                echo "<a href='quiz.php?vraag=2&keuze=2' id='$geselcteerd2'>Nee ik heb geen rijbewijs</a></br></br>";
                
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        echo "<a href='quiz.php?vraag=2&keuze=1&antwoord=1' id='$weg'>Volgende</a></br>";
                    }else if ($keuze == 2){
                        echo "<a href='quiz.php?vraag=2&keuze=2&antwoord=1' id='$weg'?>Volgende</a></br>";
                    }
                    if (isset($_GET["antwoord"])){
                        $antwoord = $_GET["antwoord"];
                        if ($keuze == 1){
                            echo "<p>Dit is fijn om te hebben en zorgt voor extra mogelijkheden tijdens het dienjaar</br><p>";
                            echo "<a href='quiz.php?vraag=3'>Volgende vraag</a> </br>";
            
                        }else if ($keuze == 2){
                            echo "<p>Dit is niet verplicht om te hebben als je na je dienjaar bij defensie blijft werken kan je bij defensie gratis je rijbewijs halen.</br><p>";
                            echo "<a href='quiz.php?vraag=3'>Volgende vraag</a> </br>";
                        }
                    } 
                    echo "<a href='quiz.php?vraag=2'>Terug</a></br>";
                }
                echo "<a href='quiz.php?vraag=1'>Vorige vraag</a>";
            }if ($vraagnummer == 3){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';  
                    }else if ($keuze == 3){
                        $geselcteerd3 = 'gekozen'; 
                    }   
                    if (isset($_GET["antwoord"])){
                        $weg = 'weg';
                        if ($keuze == 1){
                            $geselcteerd2 ='weg';
                            $geselcteerd3 ='weg';
                        }else if ($keuze == 2){
                            $geselcteerd1 = 'weg';
                            $geselcteerd3 ='weg';
                        }else if ($keuze == 3){
                            $geselcteerd1 ='weg';
                            $geselcteerd2 ='weg';
                        }  
                    }
                }
                echo "<h2 id= 'vraag'>Bent u al bij een Dienjaar voorlichting geweest?</h2>";
                echo "<a href='quiz.php?vraag=3&keuze=1' id='$geselcteerd1'>Ja ik ben al een voorlichting geweest</a></br>";
                echo "<a href='quiz.php?vraag=3&keuze=2' id='$geselcteerd2'>Nee ik ben nog niet naar een voorlichting geweest</a></br>";
                echo "<a href='quiz.php?vraag=3&keuze=3' id='$geselcteerd3'>Wat is een Dienjaar voorlichting</a></br></br>";
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        echo "<a href='quiz.php?vraag=3&keuze=1&antwoord=1' id='$weg'>Volgende</a></br>";
                    }else if ($keuze == 2){
                        echo "<a href='quiz.php?vraag=3&keuze=2&antwoord=1' id='$weg'?>Volgende</a></br>";
                    }else if ($keuze ==3){
                        echo "<a href='quiz.php?vraag=3&keuze=3&antwoord=1' id='$weg'?>Volgende</a></br>";
                    }
                    if (isset($_GET["antwoord"])){
                        $antwoord = $_GET["antwoord"];
                        if ($keuze == 1){
                            echo "<p>Fijn! Dit is een verplichte stap in het selectie proces.</br><p>";
                            echo "<a href='quiz.php?vraag=4'>Volgende vraag</a> </br>";
            
                        }else if ($keuze == 2){
                            echo "<p>Het boezoeken van een voorlichting is een verplichte stap in het selectie proces. Als u intressen heeft raden wij aan om uw hiervoor in teschrijven.</br><p>";
                            echo "<a href='https://werkenbijdefensie.nl/ontmoet-defensie/evenementen/voorlichting-dienjaar-defensie-181'>Schrijf je nu in!</a></br>";                           
                            echo "<a href='quiz.php?vraag=4'>Volgende vraag</a> </br>";
                        }else if ($keuze == 3){
                            echo "<p>Defensie geeft een voolichting over het Dienjaar met alle nodige infomatie om te kijken of het Dienjaar wat voor u is.</br>Het boezoeken van een voorlichting is een verplichte stap in het selectie proces. Als u intressen heeft raden wij aan om uw hiervoor in teschrijven.</br><p>";
                            echo "<a href='https://werkenbijdefensie.nl/ontmoet-defensie/evenementen/voorlichting-dienjaar-defensie-181'>Schrijf je nu in!</a></br>";
                            echo "<a href='quiz.php?vraag=4'>Volgende vraag</a> </br>";
                        }
                    } 
                    echo "<a href='quiz.php?vraag=3'>Terug</a></br>";
                }
                echo "<a href='quiz.php?vraag=2'>Vorige vraag</a>";
            }if ($vraagnummer == 4){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }else if ($keuze ==3) {
                        $geselcteerd1 = 'gekozen';
                        $geselcteerd3 = 'gekozen';
                    }else if ($keuze ==4) {
                        $geselcteerd1 = 'gekozen';
                        $geselcteerd4 = 'gekozen';
                    }      
                    if (isset($_GET["antwoord"])){
                        $antwoord = $_GET["antwoord"];
                        if ($antwoord==1){
                            $weg = 'weg';
                            if ($keuze == 1){
                                $geselcteerd2 ='weg';
                            }else if ($keuze == 2){
                                $geselcteerd1 = 'weg';
                            }
                        }else if ($antwoord ==2)
                            $weg2 = 'weg';
                            if ($keuze == 3){
                                $geselcteerd2 ='weg';
                                $geselcteerd4 ='weg';
                            }else if ($keuze == 4){
                                $geselcteerd2 = 'weg';
                                $geselcteerd3 ='weg';
                            }
                    }
                }
                echo "<h2 id= 'vraag'>Kwalificeert u voor een Specialistisch Dienjaar?</h2>";
                echo "<h3 id='vraag2'>Bent u minimaal in bezit van een MBO-3 diploma of hoger?<h3>";
                echo "<a href='quiz.php?vraag=4&keuze=1' id='$geselcteerd1'>Ja ik heb een MBO-3 diploma of hoger.</a></br>";
                echo "<a href='quiz.php?vraag=4&keuze=2' id='$geselcteerd2'>Nee ik heb geen Mbo 3 diploma.</a></br></br>";
                
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        echo "<a href='quiz.php?vraag=4&keuze=1&antwoord=1' id='$weg'>Volgende</a></br>";
                    }else if ($keuze == 2){
                        echo "<a href='quiz.php?vraag=4&keuze=2&antwoord=1' id='$weg'?>Volgende</a></br>";
                    }
                    if (isset($_GET["antwoord"])){
                        $antwoord = $_GET["antwoord"];
                        if ($antwoord ==1 ){
                            if ($keuze == 1){
                                echo "<h3 id='vraag2'>Bent u minimaal 3 jaar werkzaam binnen een specialisatie?<h3>";
                                echo "<a href='quiz.php?vraag=4&keuze=3&antwoord=1' id='$geselcteerd3'>Ja ik heb 3 jaar ervaring bennen mijn specialisatie.</a></br>";
                                echo "<a href='quiz.php?vraag=4&keuze=4&antwoord=1' id='$geselcteerd4'>Nee ik heb nog geen 3 jaar ervaring binnen mijn specialisatie.</a></br></br>";
                                echo "<a href='quiz.php?vraag=4'>Terug</a></br>";
                            }else if ($keuze == 2){
                                echo "<p>U quilificeerd niet voor een specalisten dienjaar. (U kunt nog steeds een normaal Dienjaar doen)</br><p>";
                                echo "<a href='quiz.php?vraag=5'>Volgende vraag</a> </br>";
                                echo "<a href='quiz.php?vraag=4'>Terug</a></br>"; 
                            }else if ($keuze == 3){
                                echo "<h3 id='vraag2'>Bent u minimaal 3 jaar werkzaam binnen een specialisatie?<h3>";
                                echo "<a href='quiz.php?vraag=4&keuze=3&antwoord=1' id='$geselcteerd3'>Ja ik heb 3 jaar ervaring bennen mijn specialisatie.</a></br>";
                                echo "<a href='quiz.php?vraag=4&keuze=4&antwoord=1' id='$geselcteerd4'>Nee ik heb nog geen 3 jaar ervaring binnen mijn specialisatie.</a></br></br>";
                                echo "<a href='quiz.php?vraag=4&keuze=3&antwoord=2' id='$weg2'?>Volgende</a></br>"; 
                                echo "<a href='quiz.php?vraag=4'>Terug</a></br>";
                            }else if ($keuze == 4){
                                echo "<h3 id='vraag2'>Bent u minimaal 3 jaar werkzaam binnen een specialisatie?<h3>";
                                echo "<a href='quiz.php?vraag=4&keuze=3&antwoord=1' id='$geselcteerd3'>Ja ik heb 3 jaar ervaring bennen mijn specialisatie.</a></br>";
                                echo "<a href='quiz.php?vraag=4&keuze=4&antwoord=1' id='$geselcteerd4'>Nee ik heb nog geen 3 jaar ervaring binnen mijn specialisatie.</a></br></br>";
                                echo "<a href='quiz.php?vraag=4&keuze=4&antwoord=2' id='$weg2'?>Volgende</a></br>";
                                echo "<a href='quiz.php?vraag=4'>Terug</a></br>"; 
                            }
                        }else if ($antwoord == 2){
                            if ($keuze == 3){
                                echo "<a href='quiz.php?vraag=4&keuze=3&antwoord=1' id='$geselcteerd3'>Ja ik heb 3 jaar ervaring bennen mijn specialisatie.</a></br>";
                                echo "<a href='quiz.php?vraag=4&keuze=4&antwoord=1' id='$geselcteerd4'>Nee ik heb nog geen 3 jaar ervaring binnen mijn specialisatie.</a></br></br>";
                                echo "<p>U kwalificeerd voor het een specialistisch Dienjaar!</p>";
                                echo "<a href='https://werkenbijdefensie.nl/vacatures/militaire-vacatures/specialistisch-dienjaar-defensie-officier-e46303'>Lees er hier meer over</a></br>";
                                echo "<a href='quiz.php?vraag=5'>Volgende vraag</a></br>";
                                echo "<a href='quiz.php?vraag=4&keuze=1&antwoord=1'>Terug</a></br>";
                                
                            }else if ($keuze == 4){
                                echo "<a href='quiz.php?vraag=4&keuze=3&antwoord=1' id='$geselcteerd3'>Ja ik heb 3 jaar ervaring bennen mijn specialisatie.</a></br>";
                                echo "<a href='quiz.php?vraag=4&keuze=4&antwoord=1' id='$geselcteerd4'>Nee ik heb nog geen 3 jaar ervaring binnen mijn specialisatie.</a></br></br>";
                                echo "<a href='https://werkenbijdefensie.nl/vacatures/militaire-vacatures/specialistisch-dienjaar-defensie-officier-e46303'>Lees er hier meer over</a></br>";
                                echo "<p>U quilificeerd niet voor een specalisten dienjaar. </br>Heeft u 2 jaar ervaring in uw specialisme dan kunt u contcat opnemen om te kijken of het toch mogelijk is om een specalisen dienjaar te doen. 
                                </br>(U kunt nog steeds een normaal Dienjaar doen)</br><p>";
                                echo "<a href='quiz.php?vraag=5'>Volgende vraag</a> </br>";
                                echo "<a href='quiz.php?vraag=4&keuze=1&antwoord=1'>Terug</a></br>";
                            }
                        }
                            
                    } 
                    
                }
                echo "<a href='quiz.php?vraag=3'>Vorige vraag</a>";
                
            }if ($vraagnummer == 5){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }else if ($keuze ==3) {
                        $geselcteerd1 = 'gekozen';
                        $geselcteerd3 = 'gekozen';
                    }else if ($keuze ==4) {
                        $geselcteerd1 = 'gekozen';
                        $geselcteerd4 = 'gekozen';
                    }      
                    if (isset($_GET["antwoord"])){
                        $antwoord = $_GET["antwoord"];
                        if ($antwoord==1){
                            $weg = 'weg';
                            if ($keuze == 1){
                                $geselcteerd2 ='weg';
                            }else if ($keuze == 2){
                                $geselcteerd1 = 'weg';
                            }
                        }else if ($antwoord ==2)
                            $weg2 = 'weg';
                            if ($keuze == 3){
                                $geselcteerd2 ='weg';
                                $geselcteerd4 ='weg';
                            }else if ($keuze == 4){
                                $geselcteerd2 = 'weg';
                                $geselcteerd3 ='weg';
                            }
                    }
                }
                echo "<h2 id= 'vraag'>Heeft u enige allergieën?</h2>";
                echo "<a href='quiz.php?vraag=5&keuze=1' id='$geselcteerd1'>Ja ik heb allergieën.</a></br>";
                echo "<a href='quiz.php?vraag=5&keuze=2' id='$geselcteerd2'>Nee ik heb geen allergieën.</a></br></br>";
                
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        echo "<a href='quiz.php?vraag=5&keuze=1&antwoord=1' id='$weg'>Volgende</a></br>";
                    }else if ($keuze == 2){
                        echo "<a href='quiz.php?vraag=5&keuze=2&antwoord=1' id='$weg'?>Volgende</a></br>";
                    }
                    if (isset($_GET["antwoord"])){
                        $antwoord = $_GET["antwoord"];
                        if ($antwoord ==1 ){
                            if ($keuze == 1){
                                echo "<h2 id='vraag2'>Moet u voor deze allergie medicijnene slikken?</h2>";
                                echo "<a href='quiz.php?vraag=5&keuze=3&antwoord=1' id='$geselcteerd3'>Ja ik moet hiervoor medicijnene slikken.</a></br>";
                                echo "<a href='quiz.php?vraag=5&keuze=4&antwoord=1' id='$geselcteerd4'>Nee ik hoef hiervoor geen medicijnene te slikken.</a></br></br>";
                                echo "<a href='quiz.php?vraag=5'>Terug</a></br>";
                            }else if ($keuze == 2){
                                echo "<p>U kunt gewoon een Dienjaar doen.</br><p>";
                                echo "<a href='quiz.php?vraag=6'>Volgende vraag</a> </br>";
                                echo "<a href='quiz.php?vraag=6'>Terug</a></br>";
                            }else if ($keuze == 3){
                                echo "<h3 id='vraag2'>Moet u voor deze allergie medicijnene slikken?<h3>";
                                echo "<a href='quiz.php?vraag=5&keuze=3&antwoord=1' id='$geselcteerd3'>Ja ik moet hiervoor medicijnene slikken.</a></br>";
                                echo "<a href='quiz.php?vraag=5&keuze=4&antwoord=1' id='$geselcteerd4'>Nee ik hoef hiervoor geen medicijnene te slikken.</a></br></br>";
                                echo "<a href='quiz.php?vraag=5&keuze=3&antwoord=2' id='$weg2'?>Volgende</a></br>"; 
                                echo "<a href='quiz.php?vraag=5'>Terug</a></br>";
                            }else if ($keuze == 4){
                                echo "<h3 id='vraag2'>Moet u voor deze allergie medicijnene slikken?<h3>";
                                echo "<a href='quiz.php?vraag=5&keuze=3&antwoord=1' id='$geselcteerd3'>Ja ik moet hiervoor medicijnene slikken.</a></br>";
                                echo "<a href='quiz.php?vraag=5&keuze=4&antwoord=1' id='$geselcteerd4'>Nee ik hoef hiervoor geen medicijnene te slikken.</a></br></br>";
                                echo "<a href='quiz.php?vraag=5&keuze=4&antwoord=2' id='$weg2'?>Volgende</a></br>";
                                echo "<a href='quiz.php?vraag=5'>Terug</a></br>"; 
                            }
                        }else if ($antwoord == 2){
                            if ($keuze == 3){
                                echo "<a href='quiz.php?vraag=5&keuze=3&antwoord=1' id='$geselcteerd3'>Ja ik moet hiervoor medicijnene slikken.</a></br>";
                                echo "<a href='quiz.php?vraag=5&keuze=4&antwoord=1' id='$geselcteerd4'>Nee ik hoef hiervoor geen medicijnene te slikken.</a></br></br>";
                                echo "<p>U kan mischien geen Dienjaar doen.</p></br>";
                                echo "<p>Als militair kan je onverwacht in situaties terechtkomen waardoor je plotseling zonder medicijnen kan komen te zitten.</br>
                                Of je goedgekeurd kan worden ligt aan het soort medicijn dat je gebruikt:</br>
                                - Als je plotseling moet stoppen met het slikken van een medicijn en dat levert een acuut gevaar op voor je gezondheid, dan ben je ongeschikt om militair te worden.</br>
                                - Als je een medicijn slikt dat blijvende gezondheidsschade veroorzaakt als je er plotseling mee zou moeten stoppen, ben je ook medisch ongeschikt om militair te worden.</br>
                                Als je wilt weten of jij door de medicijnen die jij slikt afgekeurd zal worden, kan je het beste via de mail contact met ons opnemen. </br>
                                Belangrijk: je hoeft via de mail geen medische gegevens door te geven. Je hoeft alleen aan te geven dat je een medische vraag hebt.</br> Dan zorgen wij ervoor dat je door een arts wordt teruggebeld</p>";
                                echo "<a href='quiz.php?vraag=6'>Volgende vraag</a></br>";
                                echo "<a href='quiz.php?vraag=5&keuze=1&antwoord=1'>Terug</a></br>";                                
                            }else if ($keuze == 4){
                                echo "<a href='quiz.php?vraag=5&keuze=3&antwoord=1' id='$geselcteerd3'>Ja ik moet hiervoor medicijnene slikken.</a></br>";
                                echo "<a href='quiz.php?vraag=5&keuze=4&antwoord=1' id='$geselcteerd4'>Nee ik hoef hiervoor geen medicijnene te slikken.</a></br></br>";
                                echo "<p>U kunt gewoon een Dienjaar doen.</br><p>";
                                echo "<a href='quiz.php?vraag=6'>Volgende vraag</a> </br>";
                                echo "<a href='quiz.php?vraag=5&keuze=1&antwoord=1'>Terug</a></br>";
                            }
                        }
                            
                    } 
                    
                }
                echo "<a href='quiz.php?vraag=4'>Vorige vraag</a>";
                
            }if ($vraagnummer == 6){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }   
                    if (isset($_GET["antwoord"])){
                        $weg = 'weg';
                        if ($keuze == 1){
                            $geselcteerd2 ='weg';
                        }else if ($keuze == 2){
                            $geselcteerd1 = 'weg';
                        }   
                    }
                }
                echo "<h2 id= 'vraag'>Heeft u last van enige relevante fobieën, zoals hoogtevrees of claustrofobie?</h2>";
                echo "<a href='quiz.php?vraag=6&keuze=1' id='$geselcteerd1'>Ja ik heb last van een of meerde fobieën</a></br>";
                echo "<a href='quiz.php?vraag=6&keuze=2' id='$geselcteerd2'>Nee ik heb geen last van een fobie</a></br></br>";
                

                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        echo "<a href='quiz.php?vraag=6&keuze=1&antwoord=1' id='$weg'>Volgende</a>";
                    }else if ($keuze == 2){
                        echo "<a href='quiz.php?vraag=6&keuze=2&antwoord=1' id='$weg'?>Volgende</a>";
                    }
                    if (isset($_GET["antwoord"])){
                        if ($keuze == 1){
                            echo "<p>Je mag altijd meedoen aan het dienjaar alleen zult u wel in situaties komen waar uw angsten naar boven komen. 
                            </br>Als de claustrofobie of hoogtevrees heel erg is, wordt het toch afgeraden om mee te doen.</br> Neem contact op met een van de gezondheids specalisten en vraag hoe het presies zit.<p>";
                            echo "<a href='quiz.php?vraag=7'>Volgende vraag</a>";
            
                        }else if ($keuze == 2){
                            echo "<p>U kunt een dienjaar Doen.</br><p>";
                            echo "<a href='quiz.php?vraag=7'>Volgende vraag</a>";
                        }
                    } 
                    echo "</br></br><a href='quiz.php?vraag=6'>Terug</a>";
                }
            }if ($vraagnummer == 7){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }else if ($keuze ==3){
                        $geselcteerd3 ='gekozen';
                    }   
                    if (isset($_GET["antwoord"])){
                        $weg = 'weg';
                        if ($keuze == 1){
                            $geselcteerd2 ='weg';
                            $geselcteerd3='weg';
                        }else if ($keuze == 2){
                            $geselcteerd1 = 'weg';
                            $geselcteerd3='weg';
                        }else if ($keuze == 3){
                            $geselcteerd1 = 'weg';
                            $geselcteerd2='weg';
                        }   
                    }
                }
                echo "<h3 id= 'vraag'>Bent u kleurenblind of Heeft u een bril nodig?</h3>";
                echo "<a href='quiz.php?vraag=7&keuze=1' id='$geselcteerd1'>Ik heb een bril nodig</a></br>";
                echo "<a href='quiz.php?vraag=7&keuze=2' id='$geselcteerd2'>Ik ben kleurenblind.</a></br>";
                echo "<a href='quiz.php?vraag=7&keuze=3' id='$geselcteerd3'>Ik heb geen bril en ik ben niet kleurenblind</a></br></br>";


                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        echo "<a href='quiz.php?vraag=7&keuze=1&antwoord=1' id='$weg'>Volgende</a>";
                    }else if ($keuze == 2){
                        echo "<a href='quiz.php?vraag=7&keuze=2&antwoord=1' id='$weg'?>Volgende</a>";
                    }else if ($keuze == 3){
                        echo "<a href='quiz.php?vraag=7&keuze=3&antwoord=1' id='$weg'?>Volgende</a>";
                    }
                    if (isset($_GET["antwoord"])){
                        if ($keuze == 1){
                            echo "<p>De normen zijn:</br>
                            Scherp zien op afstand:</br>
                            Gezichtsscherpte, zonder bril of contactlenzen, voor beide ogen samen: minimaal 0,1;</br>
                            Gezichtsscherpte, eventueel met bril of contactlenzen, voor beide ogen samen: minimaal 0,8. De gezichtsscherpte voor het slechtste oog: minimaal 0,5</br>
                            Scherp zien nabij:</br>                           
                            Gezichtsscherpte op 40 cm, eventueel met bril of contactlenzen, voor beide ogen samen: groter minimaal 0,8.</br>
                            Goed zicht over het gehele gezichtsveld en in de ooghoeken.</br><p>";
                            echo "<a href='quiz.php?vraag=8'>Volgende vraag</a>";
            
                        }else if ($keuze == 2){
                            echo "<p>Als je kleuren blind bent kan je niet meedoen met het dienjaar, alleen met een lichte kleurenblindheid ben je medisch geschikt voor een functie als militair.</br>
                            Als je wilt weten of jouw kleurenblindheid licht genoeg is, dan kan je het beste via de mail contact met ons opnemen. We kunnen je dan inplannen voor een zogenaamd vooronderzoek. </br>
                            Belangrijk: je hoeft via de mail geen medische gegevens door te geven. Je hoeft alleen aan te geven dat je een medische vraag hebt. Dan zorgen wij ervoor dat je door een arts wordt teruggebeld.
                            </br><p>";
                            echo "<a href='quiz.php?vraag=8'>Volgende vraag</a>";
                        }else if ($keuze ==3){
                            echo "<p>U kunt een dienjaar Doen.</br><p>";
                            echo "<a href='quiz.php?vraag=8'>Volgende vraag</a>";
                        }
                    } 
                    echo "</br></br><a href='quiz.php?vraag=7'>Terug</a><br>";
                    echo "<a href='quiz.php?vraag=6'>Vorige vraag</a>";
                }
            }if ($vraagnummer == 8){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }else if ($keuze ==3){
                        $geselcteerd3 ='gekozen';
                    }else if ($keuze ==4){
                        $geselcteerd4 ='gekozen';
                    } else if ($keuze ==5){
                        $geselcteerd5 ='gekozen';
                    }else if ($keuze ==6){
                        $geselcteerd6 ='gekozen';
                    } 
                    if (isset($_GET["antwoord"])){
                        $weg = 'weg';
                        if ($keuze == 1){
                            $geselcteerd2 ='weg';
                            $geselcteerd3='weg';
                            $geselcteerd4 ='weg';
                            $geselcteerd5='weg';
                            $geselcteerd6 ='weg';
                        }else if ($keuze == 2){
                            $geselcteerd1 ='weg';
                            $geselcteerd3='weg';
                            $geselcteerd4 ='weg';
                            $geselcteerd5='weg';
                            $geselcteerd6 ='weg';
                        }else if ($keuze == 3){
                            $geselcteerd2 ='weg';
                            $geselcteerd1='weg';
                            $geselcteerd4 ='weg';
                            $geselcteerd5='weg';
                            $geselcteerd6 ='weg';
                        }else if ($keuze == 4){
                            $geselcteerd2 ='weg';
                            $geselcteerd1='weg';
                            $geselcteerd3 ='weg';
                            $geselcteerd5='weg';
                            $geselcteerd6 ='weg';
                        }else if ($keuze == 5){
                            $geselcteerd2 ='weg';
                            $geselcteerd1='weg';
                            $geselcteerd4 ='weg';
                            $geselcteerd3='weg';
                            $geselcteerd6 ='weg';
                        }else if ($keuze == 6){
                            $geselcteerd2 ='weg';
                            $geselcteerd1='weg';
                            $geselcteerd4 ='weg';
                            $geselcteerd5='weg';
                            $geselcteerd3 ='weg';
                        }  
                    }
                }
                echo "<h2 id= 'vraag'>Heeft u last van een van de onderstaande condieties?</h2>";
                echo "<a href='quiz.php?vraag=8&keuze=1' id='$geselcteerd1'>Hooikoorts</a></br>";
                echo "<a href='quiz.php?vraag=8&keuze=2' id='$geselcteerd2'>Atsma</a></br>";
                echo "<a href='quiz.php?vraag=8&keuze=3' id='$geselcteerd3'>Diabetes</a></br>";
                echo "<a href='quiz.php?vraag=8&keuze=4' id='$geselcteerd4'>Eplelepsie</a></br>";
                echo "<a href='quiz.php?vraag=8&keuze=5' id='$geselcteerd5'>Overig</a></br>";
                echo "<a href='quiz.php?vraag=8&keuze=6' id='$geselcteerd6'>Ik heb geen last van enige ziektes</a></br></br>";


                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        echo "<a href='quiz.php?vraag=8&keuze=1&antwoord=1' id='$weg'>Volgende</a>";
                    }else if ($keuze == 2){
                        echo "<a href='quiz.php?vraag=8&keuze=2&antwoord=1' id='$weg'?>Volgende</a>";
                    }else if ($keuze == 3){
                        echo "<a href='quiz.php?vraag=8&keuze=3&antwoord=1' id='$weg'?>Volgende</a>";
                    }else if ($keuze == 4){
                        echo "<a href='quiz.php?vraag=8&keuze=4&antwoord=1' id='$weg'?>Volgende</a>";
                    }else if ($keuze == 5){
                        echo "<a href='quiz.php?vraag=8&keuze=5&antwoord=1' id='$weg'?>Volgende</a>";
                    }else if ($keuze == 6){
                        echo "<a href='quiz.php?vraag=8&keuze=6&antwoord=1' id='$weg'?>Volgende</a>";
                    }
                    if (isset($_GET["antwoord"])){
                        if ($keuze == 1){
                            echo "<p> Met hooikoorts ben je medisch geschikt om militair te worden. Ook als je daarvoor medicijnen gebruikt, omdat je met de medicijnen tegen hooikoorts zomaar en zonder bijverschijnselen kan stoppen. 
                            </br>Zie overig voor meer informatie over medicatie.</p></br>";
                            echo "<a href='quiz.php?vraag=9'>Volgende vraag</a>";
                        }else if ($keuze == 2){
                            echo "<p>Wanneer het astma momenteel actief is of als het noodzakelijk is dat je medicijnen gebruikt  (bv. pufjes) kun je niet bij Defensie gaan werken als militair. 
                            </br>Als je drie jaar geen medicatie hebt gebruikt, geen klachten hebt en normaal kan sporten, is het geen bezwaar. 
                            </br>Als je wilt weten of dit voor jouw specifieke situatie ook zo is, maak dan een afspraak voor een vooronderzoek. Dat kan het beste via de mail. 
                            </br>Belangrijk: je hoeft via de mail geen medische gegevens door te geven. Je hoeft alleen aan te geven dat je een medische vraag hebt. Dan zorgen wij ervoor dat je door een arts wordt teruggebeld.</br><p>";
                            echo "<a href='quiz.php?vraag=9'>Volgende vraag</a>";
                        }else if ($keuze ==3){
                            echo "<p>Met Diabetes Mellitus ben je niet geschikt om aangesteld te worden. Je moet namelijk medicijnen gebruiken en daarmee kan je niet zomaar stoppen. 
                            </br>Als je bij een uitzending plotseling zonder die medicijnen komt te zitten is dat levensgevaarlijk.' Zie overig voor meer info over medicatie.</br><p>";
                            echo "<a href='quiz.php?vraag=9'>Volgende vraag</a>";
                        }else if ($keuze == 4){
                            echo "<p> Dat hangt ervan af.
                            Als je meer dan 6 maanden geleden maar één keer een insult hebt gehad en jouw behandelend arts heeft niet de diagnose epilepsie gesteld, dan kan je goedgekeurd worden.</br>
                            Als je laatste epileptische aanval voor jouw 13e levensjaar was en je hebt daarna geen medicijnen tegen de epilepsie gebruikt, dan kan je ook geschikt worden bevonden.</br>
                            Als je al meer dan 10 jaar geen medicijnen tegen de epilepsie gebruikt, dan ben je ook geschikt. </br>
                            Als je meer wilt weten of over de kans dat jij goedgekeurd zou kunnen worden, maak dan een afspraak voor een vooronderzoek. Dat kan het beste via de mail.</br>
                            Belangrijk: je hoeft via de mail geen medische gegevens door te geven. Je hoeft alleen aan te geven dat je een medische vraag hebt. Dan zorgen wij ervoor dat je door een arts wordt teruggebeld.</br><p>";
                            echo "<a href='quiz.php?vraag=9'>Volgende vraag</a>";
                        }else if ($keuze == 5){
                            echo "<p>Als militair kan je onverwacht in situaties terechtkomen waardoor je plotseling zonder medicijnen kan komen te zitten.</br>
                            Of je goedgekeurd kan worden ligt aan het soort medicijn dat je gebruikt:</br>
                            - Als je plotseling moet stoppen met het slikken van een medicijn en dat levert een acuut gevaar op voor je gezondheid, dan ben je ongeschikt om militair te worden.</br>
                            - Als je een medicijn slikt dat blijvende gezondheidsschade veroorzaakt als je er plotseling mee zou moeten stoppen, ben je ook medisch ongeschikt om militair te worden.</br>
                            Als je wilt weten of jij door de medicijnen die jij slikt afgekeurd zal worden, kan je het beste via de mail contact met ons opnemen. </br>
                            Belangrijk: je hoeft via de mail geen medische gegevens door te geven. Je hoeft alleen aan te geven dat je een medische vraag hebt. Dan zorgen wij ervoor dat je door een arts wordt teruggebeld.</br><p>";
                            echo "<a href='quiz.php?vraag=9'>Volgende vraag</a>";
                        }else if ($keuze == 6){
                            echo "<p>U kunt gewoon een dienjaar doen.</br><p>";
                            echo "<a href='quiz.php?vraag=9'>Volgende vraag</a>";
                        }
                    } 
                    echo "</br></br><a href='quiz.php?vraag=8'>Terug</a><br>";
                    echo "<a href='quiz.php?vraag=7'>Vorige vraag</a>";
                }
            }if ($vraagnummer == 9){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }else if ($keuze ==3){
                        $geselcteerd3 ='gekozen';
                    }else if ($keuze ==4){
                        $geselcteerd4 ='gekozen';
                    } else if ($keuze ==5){
                        $geselcteerd5 ='gekozen';
                    }else if ($keuze ==6){
                        $geselcteerd6 ='gekozen';
                    }else if ($keuze ==7){
                        $geselcteerd7 ='gekozen';
                    }else if ($keuze ==8){
                        $geselcteerd8 ='gekozen';
                    } 
                    if (isset($_GET["antwoord"])){
                        $weg = 'weg';
                        if ($keuze == 1){
                            $geselcteerd2 ='weg';
                            $geselcteerd3='weg';
                            $geselcteerd4 ='weg';
                            $geselcteerd5='weg';
                            $geselcteerd6 ='weg';
                            $geselcteerd7='weg';
                            $geselcteerd8 ='weg';
                        }else if ($keuze == 2){
                            $geselcteerd1 ='weg';
                            $geselcteerd3='weg';
                            $geselcteerd4 ='weg';
                            $geselcteerd5='weg';
                            $geselcteerd6 ='weg';
                            $geselcteerd7='weg';
                            $geselcteerd8 ='weg';
                        }else if ($keuze == 3){
                            $geselcteerd2 ='weg';
                            $geselcteerd1='weg';
                            $geselcteerd4 ='weg';
                            $geselcteerd5='weg';
                            $geselcteerd6 ='weg';
                            $geselcteerd7='weg';
                            $geselcteerd8 ='weg';
                        }else if ($keuze == 4){
                            $geselcteerd2 ='weg';
                            $geselcteerd1='weg';
                            $geselcteerd3 ='weg';
                            $geselcteerd5='weg';
                            $geselcteerd6 ='weg';
                            $geselcteerd7='weg';
                            $geselcteerd8 ='weg';
                        }else if ($keuze == 5){
                            $geselcteerd2 ='weg';
                            $geselcteerd1='weg';
                            $geselcteerd4 ='weg';
                            $geselcteerd3='weg';
                            $geselcteerd6 ='weg';
                            $geselcteerd7='weg';
                            $geselcteerd8 ='weg';
                        }else if ($keuze == 6){
                            $geselcteerd2 ='weg';
                            $geselcteerd1='weg';
                            $geselcteerd4 ='weg';
                            $geselcteerd5='weg';
                            $geselcteerd3 ='weg';
                            $geselcteerd7='weg';
                            $geselcteerd8 ='weg';
                        }else if ($keuze == 7){
                            $geselcteerd2 ='weg';
                            $geselcteerd1='weg';
                            $geselcteerd4 ='weg';
                            $geselcteerd5='weg';
                            $geselcteerd3 ='weg';
                            $geselcteerd6='weg';
                            $geselcteerd8 ='weg';
                        }else if ($keuze == 8){
                            $geselcteerd2 ='weg';
                            $geselcteerd1='weg';
                            $geselcteerd4 ='weg';
                            $geselcteerd5='weg';
                            $geselcteerd3 ='weg';
                            $geselcteerd7='weg';
                            $geselcteerd6 ='weg';
                        }  
                    }
                }
                echo "<h2 id= 'vraag'>Hoe ver bent u in het selctie proces?</h2>";
                echo "<a href='quiz.php?vraag=9&keuze=1' id='$geselcteerd1'>Ik ben nog aan het oriënteren.</a></br>";
                echo "<a href='quiz.php?vraag=9&keuze=2' id='$geselcteerd2'>Ik ben al naar een voorlichting geweest.</a></br>";
                echo "<a href='quiz.php?vraag=9&keuze=3' id='$geselcteerd3'>Ik heb me al aangemeld.</a></br>";
                echo "<a href='quiz.php?vraag=9&keuze=4' id='$geselcteerd4'>Ik heb mijn cijferlijst geupload.</a></br>";
                echo "<a href='quiz.php?vraag=9&keuze=5' id='$geselcteerd5'>Ik heb de capaciteiten test gedaan. </a></br>";
                echo "<a href='quiz.php?vraag=9&keuze=6' id='$geselcteerd6'>Ik heb de persoonlijkheidsvragenlijst beantwoord.</a></br>";
                echo "<a href='quiz.php?vraag=9&keuze=7' id='$geselcteerd7'>Ik heb een psychologische evaluatie gehad.</a></br>";
                echo "<a href='quiz.php?vraag=9&keuze=8' id='$geselcteerd8'>Ik heb mijn afrondend gesprek gehad.</a></br></br>";


                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        echo "<a href='quiz.php?vraag=9&keuze=1&antwoord=1' id='$weg'>Volgende</a>";
                    }else if ($keuze == 2){
                        echo "<a href='quiz.php?vraag=9&keuze=2&antwoord=1' id='$weg'?>Volgende</a>";
                    }else if ($keuze == 3){
                        echo "<a href='quiz.php?vraag=9&keuze=3&antwoord=1' id='$weg'?>Volgende</a>";
                    }else if ($keuze == 4){
                        echo "<a href='quiz.php?vraag=9&keuze=4&antwoord=1' id='$weg'?>Volgende</a>";
                    }else if ($keuze == 5){
                        echo "<a href='quiz.php?vraag=9&keuze=5&antwoord=1' id='$weg'?>Volgende</a>";
                    }else if ($keuze == 6){
                        echo "<a href='quiz.php?vraag=9&keuze=6&antwoord=1' id='$weg'?>Volgende</a>";
                    }else if ($keuze == 7){
                        echo "<a href='quiz.php?vraag=9&keuze=7&antwoord=1' id='$weg'?>Volgende</a>";
                    }else if ($keuze == 8){
                        echo "<a href='quiz.php?vraag=9&keuze=8&antwoord=1' id='$weg'?>Volgende</a>";
                    }
                    if (isset($_GET["antwoord"])){
                        if ($keuze == 1){
                            echo "<p> Dat is geen porbleem als u intressen heeft is het handig om naar een voorlichting te gaan dit is gelijk ook de volgede stap in dit proces</p></br>";
                            echo "<a href='https://werkenbijdefensie.nl/ontmoet-defensie/evenementen/voorlichting-dienjaar-defensie-181'>In schrijven voor een voorlichting?</a></br>";
                            echo "<a href='quiz.php?vraag=10'>Volgende vraag</a>";
                        }else if ($keuze == 2){
                            echo "<p> De volgende stap is je zelf aanmelden.</p></br>";
                            echo "<a href='https://werkenbijdefensie.nl/vacatures/solliciteren/dienjaar-defensie-2024-e44849'>Meld je nu aan voor het Dienjaar</a></br>";
                            echo "<a href='quiz.php?vraag=10'>Volgende vraag</a>";
                        }else if ($keuze ==3){
                            echo "<p>De volgende stap is het uploaden van je cijferlijst en diploma's</p></br>";
                            echo "<a href=''>Leer hier meer over het uploaden(link nog toevoegen)</a></br>";
                            echo "<a href='quiz.php?vraag=10'>Volgende vraag</a>";
                        }else if ($keuze == 4){
                            echo "<p>De volgende stap is de capaciteitentest.</p></br>";
                            echo "<a href=''>Leer hier meer over de capiceitentest(link nog toevoegen)</a></br>";                
                            echo "<a href='quiz.php?vraag=10'>Volgende vraag</a>";
                        }else if ($keuze == 5){
                            echo "<p>De volgende stap is de persoonlijkheidsvragenlijst.</p></br>";
                            echo "<a href=''>Leer hier meer over de persoonlijkheidsvragenlijst.(link nog toevoegen)</a></br>";                
                            echo "<a href='quiz.php?vraag=10'>Volgende vraag</a>";
                        }else if ($keuze == 6){
                            echo "<p>De volgende stap is de psychologische evaluatie.</br><p>";
                            echo "<a href=''>Leer hier meer over de psychologiesche evaluatie.(link nog toevoegen)</a></br>";                
                            echo "<a href='quiz.php?vraag=10'>Volgende vraag</a>";
                        }else if ($keuze == 7){
                            echo "<p>De volgende stap is het afrondend gesprek.</br><p>";
                            echo "<a href=''>Leer hier meer over het afrondend gesprek.(link nog toevoegen)</a></br>";                
                            echo "<a href='quiz.php?vraag=10'>Volgende vraag</a>";
                        }else if ($keuze == 8){
                            echo "<p>De volgende stap is de aanstellingskeuring. De volgende vraag gaat hier over.</br><p>";
                            echo "<a href='quiz.php?vraag=10'>Volgende vraag</a>";
                        }
                    } 
                    echo "</br></br><a href='quiz.php?vraag=9'>Terug</a><br>";
                    echo "<a href='quiz.php?vraag=8'>Vorige vraag</a>";
                }
            }if ($vraagnummer == 10){
                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        $geselcteerd1 ='gekozen';
                    }else if ($keuze == 2){
                        $geselcteerd2 = 'gekozen';
                    }else if ($keuze ==3){
                        $geselcteerd3 ='gekozen';
                    }   
                    if (isset($_GET["antwoord"])){
                        $weg = 'weg';
                        if ($keuze == 1){
                            $geselcteerd2 ='weg';
                            $geselcteerd3='weg';
                        }else if ($keuze == 2){
                            $geselcteerd1 = 'weg';
                            $geselcteerd3='weg';
                        }else if ($keuze == 3){
                            $geselcteerd1 = 'weg';
                            $geselcteerd2='weg';
                        }   
                    }
                }
                echo "<h3 id= 'vraag'>Bent u klaar voor de fysieke test?</h3>";
                echo "<p>Om door de aanstellingskeuring te komen moet je aan bepaalde fysieke eisen voldoen bij defensie. Dit wordt gezien als cluster 1 de betekent dat je de onderstaande oefeningen moet kunnen uitvoeren:</br> 
                20 minuten lopen met een rugzak van 25 kilo.</br>
                Munitiekist van 20 kilo optillen, 25 meter dragen en vervolgens neerzetten op de tiltafel. Dit doe je 10 keer.</br>
                2200 meter hardlopen in 12 minuten.</br>
                60 seconden draaibeweging maken met een bal.</br>
                Klimmen en klauteren: bewegelijkheid en hoogtevrees testen.</br>
                5 verschillende houdingen aannemen: hurkzit + 4 verschillende schiethoudingen (staand, knielend links, knielend rechts en liggend). </br>
                Werken boven schouderhoogte: gedurende 60 seconden boven schouderhoogte een steekgewicht verplaatsen en 60 seconden aan vleugelmoeren draaien.</p></br>";
                echo "<a href='quiz.php?vraag=10&keuze=1' id='$geselcteerd1'>Ik ben er helemaal klaar voor.</a></br>";
                echo "<a href='quiz.php?vraag=10&keuze=2' id='$geselcteerd2'>Ik moet nog wat meer oefenen.</a></br>";
                echo "<a href='quiz.php?vraag=10&keuze=3' id='$geselcteerd3'>Ik wil meer weten over de oefeningen</a></br></br>";


                if (isset($_GET["keuze"])){
                    $keuze = $_GET["keuze"];
                    if ($keuze == 1){
                        echo "<a href='quiz.php?vraag=10&keuze=1&antwoord=1' id='$weg'>Volgende</a>";
                    }else if ($keuze == 2){
                        echo "<a href='quiz.php?vraag=10&keuze=2&antwoord=1' id='$weg'?>Volgende</a>";
                    }else if ($keuze == 3){
                        echo "<a href='quiz.php?vraag=10&keuze=3&antwoord=1' id='$weg'?>Volgende</a>";
                    }
                    if (isset($_GET["antwoord"])){
                        if ($keuze == 1){
                            echo "<p>Gefeliciteerd je bent er helemaal klaar voor het completeren van je aanmelding voor het dienjaar.</br><p>";
                            echo "<a href='quiz.php?vraag=11'>Volgende vraag</a>";
                        }else if ($keuze == 2){
                            echo "<a hreg='https://werkenbijdefensie.nl/training'>Hier zijn wat handig oefeningen en trainings schemas om je te helpen voorbereiden.</a></br>";
                            echo "<a href='quiz.php?vraag=11'>Volgende vraag</a>";
                        }else if ($keuze ==3){
                            echo "<p>U kunt een dienjaar Doen.</br><p>";
                            echo "<a hreg=''>Hier nog wat meer informatie over de fysieke keuring.(link nog toevoegen)</a></br>";
                            echo "<a hreg='https://werkenbijdefensie.nl/training'>Hier zijn wat handig oefeningen en trainings schemas om je te helpen voorbereiden.</a></br>";
                            echo "<a href='quiz.php?vraag=11'>Volgende vraag</a>";
                        }
                    } 
                    echo "</br></br><a href='quiz.php?vraag=10'>Terug</a><br>";
                    echo "<a href='quiz.php?vraag=9'>Vorige vraag</a>";
                }
            }if ($vraagnummer == 11){
                echo "<h1>Einde quiz</h1></br></br></br>";
                echo "<a href='quiz.php?vraag=10'>vorige vraag</a>";
            }

        }else{
            echo "<h2 id='introductie'>Welkom bij de selectie quis druk op de kop om te kijken hoe ver je ben in het slectie proces</h2>";
            echo "<a href='quiz.php?vraag=1'>Begin de quiz</a>";
        } 
        echo "</div>";
    ?>

</body>
<script>
</script>
</html>