<!DOCTYPE html>
<html>
    <head>
        <title>Przetworz</title  >
    </head>

    <body>


<?php 
$opony =359.98;
$oleje = 122.30;
$swiece = 279.99;
echo '<h2>Dzieki za złożenie zamówenia</h2>';
echo "<h3>Wynik zamównienia </h3>";
echo "Zamówienie zosało złozone: " . date("d-m-Y"). date(" H:i:s") . "<br><br>" ;

if (empty($_POST["Opony"] || $_POST["Oleje"] || $_POST["Swiece"])){
    echo "Nic nie zostalo zamówione. <br>";
}
else{
    //ilosc opon
    echo "opony = ".$_POST["Opony"]. " sztuk. Za łączną kwotę " . (float)$_POST["Opony"]*$opony ." zl <br>" ;
    //ilosc oleji 
    echo "oleje = ".$_POST["Oleje"]. " sztuk. Za łączną kwotę " .  (float)$_POST["Oleje"]*$oleje ." zl <br>";
    //ilosc swiec
    echo "swiece = ".$_POST["Swiece"]. " sztuk. Za łączną kwotę " .  (float)$_POST["Swiece"]*$swiece ." zl <br>";
}

?>
    </body>
</html>
