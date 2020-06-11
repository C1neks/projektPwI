<!DOCTYPE html>
<html>
    <head>
<title>
    Nowe Ogloszenie
</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="style_kontakt.css">
<link rel="stylesheet" href="style.css">

    </head>
    <body>
      <div class="nav_container">
            
        <nav>
            <ul>
                <li class="item"><a href="index.php" class="website"></a></li>
                <li class="item"><a href="nowe-ogloszenie.php" class="newPost">Dodaj Ogłoszenie</a></li>
                <li class="item"><a href="logowanie.php" class="reg">Moje Konto</a></li>
                <li class="item"><a href="Wejscie.php" class="reg">Wyloguj</a></li>
            </ul>
            </nav>
            
            </div>
        <div class="container">
            <form action="index.html">
          
              <label for="fname">Nazwa Aukcji</label>
              <input type="text" id="fname" name="firstname" placeholder="Nazwa aukcji..">
          
              <label for="lname">Cena</label>
              <input type="text" id="lname" name="lastname" placeholder="Cena..">
          
              <label for="country">Miasto</label>
              <select id="country" name="country">
                <option>Białystok</option>
                <option>Warszawa</option>
                <option>Kraków</option>
                <option>Poznań</option>
              </select>
          
              <label for="subject">Opis</label>
              <textarea id="subject" name="subject" placeholder="..." style="height:100px"></textarea>
              <label for="img">Select image:</label>
                <input type="file" id="img" name="img" accept="image/*">
                <input type="submit">
          
            </form>
          </div>
    </body>
</html>