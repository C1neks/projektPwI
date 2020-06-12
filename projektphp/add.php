<?php
try
{
    $connect = new PDO('mysql:host=fdb17.biz.nf;dbname=3356610_projekt', '3356610_projekt', 'marcin12');
}
catch (PDOException $e)
{
    echo $e -> getMessage() . "<br/>";
    echo "blad polaczenia bezy danych";
    die();
}

$spr = true;
if($_POST["nazwa_aukcji"] == NULL or $_POST["cena"] == null or $_POST["miasto"] == null)
        {
            echo  "Nie wypełniono wszystkich pól, spróbuj ponowanie! <br> <a href=\"dodaj.php\">Powrót</a> <br> <a href=\"indexakt.php\">Strona główna</a>";
            $spr = false;
        }


        if($spr)
        {
           $stmt=$connect->prepare("INSERT INTO aukcje (nazwa_aukcji, cena, miasto) VALUES (?, ?, ?)");
           $stmt->bindValue(1, $_POST["nazwa_aukcji"], PDO::PARAM_STR);
           $stmt->bindValue(2, $_POST["cena"], PDO::PARAM_INT);
           $stmt->bindValue(3, $_POST["miasto"], PDO::PARAM_STR);
           $stmt->execute();
           echo "Post został dodany!<br> <a href=\"indexakt.php\">Powrót</a>";
        }


?>