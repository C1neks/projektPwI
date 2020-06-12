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

         
$sql = 'DELETE FROM aukcje WHERE id_aukcji = '.$_GET['id'];

$sql = $connect->prepare($sql);


        if ($sql->execute()) 
        { 
            echo "Post został usunięty <br>";
            echo "<a href=\"indexakt.php\">Powrót</a><br>";
         }
         else
         {
             echo "Nie udało się usunąć postu";
         }
?>