    <?php
    session_start();
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
    
        </head>
        <body>
        
        <?php
            echo"<p>Witaj".$_SESSION['user']."!";
        ?>
        
        
        </body>
    </html>