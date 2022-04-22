<!DOCTYPE html>
<html>
    <head>
        <title>Przetworz</title  >
    </head>

    <body>


<?php 
define ("Opony" , 125.98 );
define ("Oleje" , 122.30 );
define ("Swiece" , 33.99 );
$opony = $_POST["Opony"];
$oleje = $_POST["Oleje"];
$swiece = $_POST["Swiece"];
$jak = $_POST["jak"];
echo '<h2>Dzieki za złożenie zamówenia</h2>';
echo "<h3>Wynik zamównienia </h3>";
echo "Zamówienie zosało złozone: " . date("d-m-Y"). date(" H:i:s") . "<br><br>" ;

if (empty($opony || $oleje || $swiece)){
    echo "Nic nie zostalo zamówione. <br>";
}
else{
    echo "cena za sztuke : <br>";
    echo "Opony = ". Opony ."<br>";
    echo "Oleje = ". Oleje ."<br>";
    echo "Swiece = ". Swiece ."<br><br>";
    //ilosc opon
    echo "opony w ilości [ ".htmlspecialchars($opony). " ] -- Za łączną kwotę " . (float)$opony*Opony ." zl <br>" ;
    //ilosc oleji 
    echo "oleje w ilości [ ".htmlspecialchars($oleje). " ] -- Za łączną kwotę " . (float)$oleje*Oleje." zl <br>";
    //ilosc swiec
    echo "swiece w ilosći [  ".htmlspecialchars($swiece). " ] -- Za łączną kwotę " . (float)$swiece*Swiece." zl <br>";

    echo "----------------------------------------------<br>";
    echo "Łączna wartość zamównienia wynosi = ". (float)$opony*Opony + (float)$oleje*Oleje + (float)$swiece*Swiece;
}


switch ($jak){
    case "internet":
        echo "twoja odpowiedz to: internet";
        break;
    case "Tv":
        echo "twoja odpowiedz to: z reklamy telewizyjnej";
        break;
    case "inne":
        echo "twoja odpowiedz to: inne";
}



echo "<br>";
echo " empty: ",empty($opony) , "<br>";
echo " isset: ",isset($opony,$oleje,$swiece), "<br>";
echo " is_bool: ",is_bool($opony), "<br>";
echo " is_string: ",is_string($opony), "<br>";

$ile=12; //ilosc rekordow
$wierszy=round($ile/2); //ilosc wierszy
 
for($i=0; $i<$wierszy; $i++)
{
$ii=$i+$wierszy;
 echo '<tr><td>'.$i.'</td><td>'.$ii.'</td></tr>'; //dzieki temu 1 kolumna wypelnia sie od 0-5 a 2od 6-12
 }


?>
    </body>
</html>
