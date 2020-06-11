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
                <li class="item"><a href="logowanie.php" class="reg">Moje konto</a></li>
                <li class="item"><a href="logowanie.php" class="reg">Załóż konto</a></li>
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
                    <ul class="gallerywide normal" style="height: 600px;">
                        <li class="tleft rel fleft">
                            <div class="tcenter">
                                <a title="bmw m3" href="aukcja.html" class="thumb scale1 rel">
                                    <img src="bmwm3.jpg" alt="bmwm3">
                                </a>
                            </div>
                            <div class="inner">
                                <h4 class="normal">
                                    <a title="bmw m3" href="aukcja.html">BMW M3 <br>Cena:190,000zl</a>
                                </h4>
                            </div>
                        </li>
                        <li class="tleft rel fleft">
                            <div class="tcenter">
                                <a title="pilka adidas" href="aukcja.html" class="thumb scale1 rel">
                                    <img src="pilka.jpg" alt="pilka">
                                </a>
                            </div>
                            <div class="inner">
                                <h4 class="normal">
                                    <a title="pilka" href="aukcja.html">Pilka Adidas<br>Cena:250zl</a>
                                </h4>
                            </div>
                        </li>
                        <li class="tleft rel fleft">
                            <div class="tcenter">
                                <a title="fifa20" href="aukcja.html" class="thumb scale1 rel">
                                    <img src="fifa20.jpg" alt="fifa20">
                                </a>
                            </div>
                            <div class="inner">
                                <h4 class="normal">
                                    <a title="fifa20" href="aukcja.html">Fifa20<br>Cena:150zl</a>
                                </h4>
                            </div>
                        </li>
                        <li class="tleft rel fleft">
                            <div class="tcenter">
                                <a title="motorowka" href="aukcja.html" class="thumb scale1 rel">
                                    <img src="motorowka.jpg" alt="motorowka">
                                </a>
                            </div>
                            <div class="inner">
                                <h4 class="normal">
                                    <a title="motorowka" href="aukcja.html">Motorowka<br>Cena:310,000zl</a>
                                </h4>
                            </div>
                        </li>
                        <li class="tleft rel fleft">
                            <div class="tcenter">
                                <a title="Iphone" href="aukcja.html" class="thumb scale1 rel">
                                    <img src="iphone.jpg" alt="iphone">
                                </a>
                            </div>
                            <div class="inner">
                                <h4 class="normal">
                                    <a title="Iphone" href="aukcja.html">Iphone<br>Cena:1900zl</a>
                                </h4>
                            </div>
                        </li>
                        <li class="tleft rel fleft">
                            <div class="tcenter">
                                <a title="laptop" href="aukcja.html" class="thumb scale1 rel">
                                    <img src="laptop.jpg" alt="laptop">
                                </a>
                            </div>
                            <div class="inner">
                                <h4 class="normal">
                                    <a title="laptop" href="aukcja.html">Laptop<br>Cena:2800zl</a>
                                </h4>
                            </div>
                        </li>
                    </ul>
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