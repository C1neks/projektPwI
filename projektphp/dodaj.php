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
                    <form action="add.php" method="POST">
                    <label for="nazwa_aukcji">Nazwa aukcji:</label><br>
                    <input type="text" id="nazwa_aukcji" name="nazwa_aukcji"><br>
                    

                    <label for="skr">cena:</label><br>
                    <textarea type="cena" id="cena" name="cena"></textarea><br>


                    <label for="miasto">Miasto:</label><br>
                    <textarea type="miasto" id="miasto" name="miasto"></textarea>

                    <input type="submit" value="Dodaj aukcje">
                    </form>
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