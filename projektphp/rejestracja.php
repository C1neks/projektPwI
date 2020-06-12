<?php
    session_start();

    if(isset($_POST['email']))
    {
        //Udana walidacja?zalozmy ze tak!
        $wszystko_OK=true;

        $login = $_POST['login'];
        //sprawdzenie dlugosci loginu
        if((strlen($login)<3) || (strlen($login)>20))
        {
            $wszystko_OK=false;
            $_SESSION['e_login']="Login musi posiadac od 3 do 20 znakow";
        }
        //poprawnosc email
        $email = $_POST['email'];
        $emailB = filter_var($email,FILTER_SANITIZE_EMAIL);
        
        if((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false)||($emailB!=$email))
        {
            $wszystko_OK=false;
            $_SESSION['e_email']="Podaj poprawny email";
        }

        //Sprawdz hasło
        $haslo = $_POST['haslo'];
        //sprawdzenie dlugosci hasla
        if((strlen($haslo)<8) || (strlen($haslo)>20))
        {
            $wszystko_OK=false;
            $_SESSION['e_haslo']="Haslo musi posiadac od 8 do 20 znakow";
        }

        $haslo_hash = password_hash($haslo,PASSWORD_DEFAULT);
        

        require_once "connect.php";
        mysqli_report(MYSQLI_REPORT_STRICT);
        try
        {
            $polaczenie = new mysqli($host,$db_user,$db_password,$db_name);
            if($polaczenie->connect_errno!=0)
            {
                throw new Exception(mysqli_connect_errno());
            }
            else
            {
                //czy email juz istnieje
                $rezultat = $polaczenie->query("SELECT id_uzytkownika FROM uzytkownicy WHERE email='$email'");

                if(!$rezultat) throw new Exception($polaczenie->error);

                $ile_takich_maili = $rezultat->num_rows;
                if($ile_takich_maili>0)
                {
                    $wszystko_OK=false;
                    $_SESSION['e_email']="Istnieje juz konto przypisane do tego adresu email";
                }

                //czy login juz istnieje
                $rezultat = $polaczenie->query("SELECT login FROM uzytkownicy WHERE login='$login'");

                if(!$rezultat) throw new Exception($polaczenie->error);

                $ile_takich_loginow = $rezultat->num_rows;
                if($ile_takich_loginow>0)
                {
                    $wszystko_OK=false;
                    $_SESSION['e_login']="Istnieje juz konto o takim loginie";
                }

                if($wszystko_OK==true)
                {
                    //wszystko ok
                    if($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL,'$login','$email','$haslo_hash')"))
                    {
                        $_SESSION['udanarejestracja']=true;
                        header("Location: Wejscie.php");
                    }
                    else
                    {
                        throw new Exception($polaczenie->error);
                    }

                }

                $polaczenie->close();
            }
        }
        catch(Exception $e)
        {
            echo'blad serwera,prosze o rejestracje w innym terminie';
            echo'Informacja:'.$e;
        }

        
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <link rel="stylesheet" href="style_register.css">
    </head>
    <body>
        <form class="box"  method="POST">
            <h1>Register</h1>
            <input type="text" name="login" placeholder="Username">
            <?php
                if(isset($_SESSION['e_login']))
                {
                    echo'<div class="error">'.$_SESSION['e_login'].'</div>';
                    unset($_SESSION['e_login']);
                }
            ?>
            <input type="email" name="email" placeholder="Email">
            <?php
                if(isset($_SESSION['e_email']))
                {
                    echo'<div class="error">'.$_SESSION['e_email'].'</div>';
                    unset($_SESSION['e_email']);
                }
            ?>
            <input type="password" name="haslo" placeholder="Password">
            <?php
                if(isset($_SESSION['e_haslo']))
                {
                    echo'<div class="error">'.$_SESSION['e_haslo'].'</div>';
                    unset($_SESSION['e_haslo']);
                }
            ?>
            <input type="submit" name="" value="Register">
        </form>
    </body>
</html>