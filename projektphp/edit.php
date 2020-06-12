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
                <li class="item"><a href="index.php" class="website"></a></li>
                <li class="item"><a href="nowe-ogloszenie.html" class="newPost">Dodaj Ogłoszenie</a></li>
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
    $sql = 'SELECT tytul, post_id FROM posty ORDER BY post_id DESC';

    foreach ($connect -> query($sql) as $rows) {

        echo '<div class="contener">';
              echo '<div class="artykul">';
                    echo '<div class="tresc">';
                       echo '<h1 class="trh1">'.$rows['tytul'].'</h1>';
                       echo '<a class="czytaj" href="editform.php?id=' . $rows['id_aukcji'] . '">'."edytuj".'</a>'; 
                       echo '<a class="czytaj" href="usun.php?id=' . $rows['id_aukcji'] . '">'."usuń".'</a>'; 
                    echo '</div>';
               echo '</div>';
        echo '</div>'; 
         }  
         ?>
        </div>
        </div>
        
        </body>
    </html>