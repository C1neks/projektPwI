<?php
    session_start();

    if(!isset($_SESSION['udanarejestracja']))
    {
        header("Location: logowanie.php");
        exit();
    }
    else
    {
        unset($_SESSION['udanarejestracja']);
    }
?>
<!DOCTYPE html>
    <html>
        <head>
    <title>
        Tablica Ogłoszeniowa
    </title>
    <script src="https://kit.fontawesome.com/f075e90b0b.js" crossorigin="anonymous"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
        </head>
        <body>
        <div class="nav_container">
            
        <nav>
            <ul>
                <li class="item"><a href="index.php" class="website"></a></li>
                <li class="item"><a href="logowanie.php" class="reg">Zaloguj sie</a></li>
            </ul>
            </nav>
            
            </div>
        <div class="searchbox-wrapper">
            <div class="search_box">
                <input type="text" placeholder="Wyszukaj...">
                <i class="fas fa-search"></i>
            </div>
        </div>
        <div class="container">
        <a href="logowanie.php"><h1>Musisz się zalogować lub zarejestrować
            aby zobaczyć zawartość.
            Kliknij w okno aby przejsc do rejestracji.
        </h1></a>
        <div class="bottom">
            <a href="O-nas.html"><b>O nas</b></a>
            <a href="Kontakt.html"><b>Kontakt</b></a>
        </div>
        </div>
        
        </body>
    </html>