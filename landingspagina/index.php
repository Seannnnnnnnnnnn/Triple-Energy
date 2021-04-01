<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <?php 
    
    // stap 1: verbinding maken

    $host = 'localhost';
    $user = 'root';
    $pass ="";
    $database = 'energy';


    $conn = new mysqli($host, $user, $pass, $database);
    if ($conn->connect_error){
        echo $conn->connect_error;
}    
    
    ?>



    <header>
        <img class="logo" src="Images/logo.png" alt="logo" height="115px">
        <a href="#" id="openbtn" onclick="openBtn()"><i class="fas fa-bars"></i></a>
        <nav>
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">Evenementen</a></li>
                <li><a href="#">Aanbiedingen</a></li>
                <li><a href="#">Producten</a></li>
                <li><a href="#">Over ons</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div id="menu" class="menu">
        <a href="#" class="closebtn" onclick="closeBtn()"><i class="fas fa-times"></i></a>
        <li><a href="#">Home</a></li>
        <li><a href="#">Evenementen</a></li>
        <li><a href="#">Aanbiedingen</a></li>
        <li><a href="#">Producten</a></li>
        <li><a href="#">Over ons</a></li>
        <li><a href="#">Contact</a></li>
    </div>

    <article id="banner">
        <img src="images/sport.jpg" alt="Prachtige omgeving, bijna net zo prachtig als de smaak van Triple Energy" id="banner-img">
    </article>


    




    <article class="alinea">
        <h1><a href='#'>Aanbiedingen</a></h1>

        <div class="alinea-flex">
            

               
    
            
            <?php
                    // stap 2: data uitlezen

                    $sql = "SELECT titel, afbeelding, omschrijving

                    FROM aanbiedingen 
                    
                    Where einddatum > now()
                    
                    limit 2
                    ";

                    $result = $conn->query($sql); 

                    if($result){
                        // stap 3: uitgelezen data gebruiken
                        while($row = $result->fetch_row()){
                        echo "<section>";
                        echo "<p class='section-titel'>" . $row[0] . "</p>";
                        echo " <a href='#'><img src='Images/" . $row[1] . "' class='section_img'></a>";
                        echo "<p>" . $row[2] . "!</p>";
                        echo "</section>";
                        }  
                    }
                
                    
                
                ?>
            
        </div>
        
    </article>




    <article class="alinea">
        <h1 class='section-titel'><a href="#" > producten</a></h1>

        <div class="alinea-flex">
            <section style="">
                <p class='section-titel'>Aardbei</p>
                
                <a href=#> <img src="Images/voorbeeld2.png" alt="" class="section_img"></a>
                
                <p>Probeer nu de nieuwste smaken van Triple Energy!</p>
            </section>
            <section style="margin: 1%;">
                <p class='section-titel'>Banaan</p>
                <a href=#> <img src="Images/voorbeeld4.png" alt="" class="section_img"></a>

                <p>Probeer nu de nieuwste smaken van Triple Energy!</p>
            </section>
        </div>
        
    </article>




    <article class="alinea">
        <h1><a href='#'>Evenementen</a></h1>

        <div class="alinea-flex">
            



                <?php

                // stap 2: data uitlezen
                $sql = "SELECT artiesten.naam, artiesten.artiest_id, artiesten.statement

                FROM evenementen
                
                JOIN artiesten ON evenementen.artiest_id = artiesten.artiest_id
                
                where datum > NOW()
                
                limit 2
                
                ;";

                $result = $conn->query($sql); 

                if($result){
                    // stap 3: uitgelezen data gebruiken
                    while($row = $result->fetch_row()){
                    echo "<section style='margin: 1%;'>";
                    echo "<p class='section-titel'>Een nieuw concert van " . $row[0] . "!</p>";
                    echo "<img src='Images/" . $row[1] . ".jpg' class='section_img'>";
                    echo "<p>" . $row[2] . "</p>";
                    echo "</section>";
                    }  // stap 4: data vrijgeven
                    $result->close();
                }
            
                
                ?>

        </div>
        
    </article>



  <script src="js/global.js"></script>
  <script src="https://kit.fontawesome.com/5b96b17e8a.js" crossorigin="anonymous"></script>


  <?php
  
  
  //stap 5: database sluiten
  $conn->close();
  
  ?>
</body>
</html>