<?php
session_start();
    if(!isset($_SESSION['zalogowany']))
    {
        header("Location: logowanie.php");
        exit();
    }
    ?>
<!DOCTYPE html>
    <html lang="pl-PL">
        <head>
    <title>
        Tablica Ogłoszeniowa
    </title>
    <script src="https://kit.fontawesome.com/f075e90b0b.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
        </head>
        <body>
        
        <div class="nav_container">
            
        <nav>
            <ul>
                <li class="item"><a href="indexakt.php" class="website"></a></li>
                <li class="item"><a href="dodaj.php" class="newPost">Dodaj Ogłoszenie</a></li>
                <!-- <li class="item"><a href="logowanie.php" class="reg">Moje konto</a></li>
                <li class="item"><a href="logowanie.php" class="reg">Załóż konto</a></li> -->
                <li class="item" style="font-weight:bold;">
                <?php
            echo"Zalogowany jako: ".$_SESSION['user'];
        ?>
                </li>
                <li class="item"><a href="logout.php" class="reg">Wyloguj</a></li>
            </ul>
            </nav>
            
            </div>
        <div class="searchbox-wrapper">
            <div class="search_box">
                <input type="text" placeholder="Wyszukaj...">
                <i class="fas fa-search"></i>
            </div>
        </div>
        <div class="bg-image">
        <section class="mainpage-gallery">
            <div class="wrapper">
                <div class="main-gallery">
                    <header>
                        <p>
                            Ogłoszenia:
                        </p>
                    </header>
                    
        <?php
        try
    {
        $connect = new PDO('mysql:host=fdb17.biz.nf;dbname=3356610_projekt', '3356610_projekt', 'marcin12');
    }
    catch (PDOException $e)
    {
        echo $e -> getMessage() . "<br/>";
        echo "blad polaczenia bazy danych";
        die();
    }
    $sql = 'SELECT id_aukcji, nazwa_aukcji, cena, miasto FROM aukcje WHERE id_aukcji = '.$_GET['id'];
    $_SESSION['id_aukcji'] = $_GET['id'] ;
    echo '<div class="contener">';
        
    
        foreach ($connect -> query($sql) as $rows) 
        {      
            echo '<div class="tresc">';
                    echo '<h1 class="trh1">'.$rows['nazwa_aukcji'].'</h1>';
                    echo '<p>'.$rows['cena'].'</p>';
                    echo '<p>'.$rows['miasto'].'</p>';
            echo '</div>';    
        }
               
        ?>
         </div>
            </div>
        </section>
        

        <div class="bottom">
                <a href="O-nas.html"><b>O nas</b></a>
                <a href="Kontakt.html"><b>Kontakt</b></a>
        </div>
        </div>
        
        </body>
    </html>