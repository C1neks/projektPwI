    <?php
    session_start();
    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header("Location: index.php");
        exit();
    }
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="style_login.css">
    </head>
    <body>
        <form class="box" action="zaloguj.php" method="POST">
            <h1>Login</h1>
            <input type="text" name="login" placeholder="Username">
            <input type="password" name="haslo" placeholder="Password">
            <input type="submit" name="" value="Login">
            <a href="rejestracja.php">Zarejestruj sie</a>
        </form>
        <?php
        if(isset($_SESSION['blad']))
            echo$_SESSION['blad'];
        ?>
    </body>
</html>