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
        <h1>Aanbiedingen</h1>

        <div class="alinea-flex">
            <section>

                <?php
                    // stap 2: data uitlezen

                    $sql = "SELECT titel FROM aanbiedingen WHERE aanbiedingen.aanbiedingen_id = 1";

                    $result = $conn->query($sql); 

                    if($result){
                        // stap 3: uitgelezen data gebruiken
                        while($row = $result->fetch_row()){
                        echo "<p class='section-titel'>" . $row[0] . "</p>";
                        }  
                    }
                
                
                    // stap 2: data uitlezen

                    $sql = "SELECT afbeelding FROM aanbiedingen WHERE aanbiedingen.aanbiedingen_id = 1";

                    $result = $conn->query($sql); 

                    if($result){
                        // stap 3: uitgelezen data gebruiken
                        while($row = $result->fetch_row()){
                        echo " <img src='Images/" . $row[0] . "' class='section_img'>";
                        }  
                    }
                
                
                    // stap 2: data uitlezen

                    $sql = "SELECT omschrijving FROM aanbiedingen WHERE aanbiedingen.aanbiedingen_id = 1";

                    $result = $conn->query($sql); 

                    if($result){
                        // stap 3: uitgelezen data gebruiken
                        while($row = $result->fetch_row()){
                        echo "<p>" . $row[0] . "!</p>";
                        }  
                    }
                
                ?>
            </section>
    
            <section>
            <?php
                    // stap 2: data uitlezen

                    $sql = "SELECT titel FROM aanbiedingen WHERE aanbiedingen.aanbiedingen_id = 2";

                    $result = $conn->query($sql); 

                    if($result){
                        // stap 3: uitgelezen data gebruiken
                        while($row = $result->fetch_row()){
                        echo "<p class='section-titel'>" . $row[0] . "</p>";
                        }  
                    }
                
                    $sql = "SELECT afbeelding FROM aanbiedingen WHERE aanbiedingen.aanbiedingen_id = 2";

                    $result = $conn->query($sql); 

                    if($result){
                        // stap 3: uitgelezen data gebruiken
                        while($row = $result->fetch_row()){
                        echo " <img src='Images/" . $row[0] . "' class='section_img'>";
                        }  
                    }
                    // stap 2: data uitlezen

                    $sql = "SELECT omschrijving FROM aanbiedingen WHERE aanbiedingen.aanbiedingen_id = 2";

                    $result = $conn->query($sql); 

                    if($result){
                        // stap 3: uitgelezen data gebruiken
                        while($row = $result->fetch_row()){
                        echo "<p>" . $row[0] . "!</p>";
                        }  
                    }
                
                ?>
            </section>
        </div>
        
    </article>




    <article class="alinea">
        <h1 class='section-titel'>Blikjes</h1>

        <div class="alinea-flex">
            <section style="margin: 1%; margin-right: 22vw">
                <p class='section-titel'>Aardbei</p>
                
                <img src="Images/voorbeeld2.png" alt="" class="section_img">
                
                <p>Probeer nu de nieuwste smaken van Triple Energy!</p>
            </section>
    
            <section style="margin: 1%;">
                <p class='section-titel'>Banaan</p>
                <img src="Images/voorbeeld4.png" alt="" class="section_img">

                <p>Probeer nu de nieuwste smaken van Triple Energy!</p>
            </section>
        </div>
        
    </article>




    <article class="alinea">
        <h1>Evenementen</h1>

        <div class="alinea-flex">
            <section style="margin: 1%;">
                <p>evenement</p>
                
                <img src="Images/placeholder.png" alt="" class="section_img">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Gravida arcu ac tortor dignissim convallis. 
                    Elit eget gravida cum sociis natoque penatibus et magnis. 
                    In nisl nisi scelerisque eu ultrices vitae auctor eu augue. 
                    Ut etiam sit amet nisl purus. Egestas fringilla phasellus 
                    faucibus scelerisque eleifend donec pretium vulputate 
                    sapien. A diam maecenas sed enim ut sem viverra aliquet. 
                    Pharetra et ultrices neque ornare aenean euismod elementum. 
                    Sagittis purus sit amet volutpat. Sed augue lacus viverra 
                    vitae congue. Sed lectus vestibulum mattis ullamcorper 
                    velit sed ullamcorper morbi tincidunt. Vitae semper quis 
                    lectus nulla at.</p>
            </section>
    
            <section style="margin: 1%;">
                <p>evenement</p>
                <img src="Images/placeholder.png" alt="" class="section_img">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Gravida arcu ac tortor dignissim convallis. 
                    Elit eget gravida cum sociis natoque penatibus et magnis. 
                    In nisl nisi scelerisque eu ultrices vitae auctor eu augue. 
                    Ut etiam sit amet nisl purus. Egestas fringilla phasellus 
                    faucibus scelerisque eleifend donec pretium vulputate 
                    sapien. A diam maecenas sed enim ut sem viverra aliquet. 
                    Pharetra et ultrices neque ornare aenean euismod elementum. 
                    Sagittis purus sit amet volutpat. Sed augue lacus viverra 
                    vitae congue. Sed lectus vestibulum mattis ullamcorper 
                    velit sed ullamcorper morbi tincidunt. Vitae semper quis 
                    lectus nulla at.</p>
            </section>
        </div>
        
    </article>



  <script src="js/global.js"></script>
  <script src="https://kit.fontawesome.com/5b96b17e8a.js" crossorigin="anonymous"></script>


  <?php
  
  // stap 4: data vrijgeven
  $result->close();
  //stap 5: database sluiten
  $conn->close();
  
  ?>
</body>
</html>