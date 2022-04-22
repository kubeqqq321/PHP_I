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

?>
    </body>
</html>
