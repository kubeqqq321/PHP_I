<!DOCTYPE html>
<html>
<head>
        <title>Pierwsza apka</title>

        <style>

        .input {
         background-color: white;
         color: black;
         border: 2px solid #4CAF50; /* Green */
         transition-duration: 0.4s;
        }
        .input:hover {
        background-color: #4CAF50; /* Green */
        color: white;
        }

        </style>
</head>

<body>

    <h1>Witaj w sklepie</h1>
<div id = "tablica">


<table border=1>
<?php
$cena = 5;
$odleglosc = 10;
$ile=10; //ilosc rekordow
$wierszy=round($ile/2); //ilosc wierszy
echo'<tr><td>'."Cena".'</td><td>'."Odleglosc".'</td></tr>';
for($i=0; $i<$wierszy; $i++)
{

 echo '<tr><td>'.($cena *$i).'</td><td>'.($odleglosc*$i).'</td></tr>'; //dzieki temu 1 kolumna wypelnia sie od 0-5 a 2od 6-12
 }
?>
</table>

    <form class="form" action="Przetworz.php" method="post">
        <table style="border : 1px;">
        <tr style="background-color: #cccccc">
            <td>Products</td>
            <td>ilosc</td>

        </tr>
        <tr>
            <td>Opony </td>
            <td><input id = "textBox" type="number" maxlength="3" name="Opony"></td>

        </tr>
        <tr>
            <td>Swiece</td>
            <td><input id = "textBox" type="number" maxlength="3" name="Swiece"></td>

        </tr>
        <tr>
            <td>Oleje</td>
            <td><input id = "textBox" type="number" maxlength="3" name="Oleje"></td>

        </tr>
        </table>
        <input id="button" type="submit" value="Złóż zamówienie" ><br> <br> 
        <div>jak dowiedziałes sie o sklepie</div>
            <select name = "jak">
                <option value="internet">Z internetu</option>
                <option value="Tv">Z rekalmy telewizyjnej</option>
                <option value="inne"> inne</option>
    

        <br><br>

        </table>
</table>
    </form>
</div>
<script>

button.addEventListener('click', function(e) {
    var textBox = document.getElementById('textBox');

    if (textBox.value == null) {
        e.preventDefault();
        textBox.setCustomValidity('Powinieneś napisać TEST!');
    } else {
        textBox.setCustomValidity('');
    }

});



</script>



</body>
</html>
