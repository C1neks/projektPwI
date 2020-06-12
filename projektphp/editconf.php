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
$link_address = 'czytaj.php?id='.$_GET['id'].'';




$spr = true;
if($_POST["nazwa_aukcji"] == NULL or $_POST["cena"] == null or $_POST["miasto"] == null)
        {
            echo "<a href='edit.php'>Spróbuj ponownie, nie wypełniono wszystkich pól!</a><br>";
            $spr = false;
        }

        if($spr)
        {

$sql = 'UPDATE aukcje SET nazwa_aukcji = :nazwa_aukcji, cena = :cena, miasto = :miasto WHERE id_aukcji = '.$_GET['id'];

$sql = $connect->prepare($sql);
$sql->bindValue(':nazwa_aukcji', $_POST["nazwa_aukcji"], PDO::PARAM_STR);
$sql->bindValue(':cena', $_POST["cena"], PDO::PARAM_INT);
$sql->bindValue(':miasto', $_POST["miasto"], PDO::PARAM_STR);

if ($sql->execute()) 
            
    echo "Post został zaktualizowany <br>";
    echo "<a href='$link_address'>Powrót do posta</a><br>";
    echo "<a href=\"indexakt.php\">Powrót</a><br>";
    
        
        }
    
?>