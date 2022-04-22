<!DOCTYPE html>
<html>
<head>
        <title>Pierwsza apka</title>

        <style>

        #calosc{
            width: 600px;
            height: auto;
            background-color: #ddd;
            text-align: center;
            justify-content: center;
            transform: translate(75%);
        }

        #guzik{
            background-color: white;
            width: 200px;
            height: 3rem;
            color: black;
            border: 2px solid #4CAF50; /* Green */
            transition-duration: 0.4s;
        }
        #guzik:hover {
            background-color: #4CAF50; /* Green */
            color: white;
            
        }

        .form{
            padding: 10px;
            margin: 0; 
            justify-content: center;
            
            text-align: center;
        }
        .form table{
            width: 100%;
            margin: 5px;
           left: 50%;
            padding: 15px;
        }
        .form table th{
            background-color: #04AA6D;
            color: white;
            height: 30px;
            border-bottom: 1px solid #ddd;
        }
        .form table td{
            height: 30px;
            border-bottom: 1px solid #ddd;
        }
        .form table tr:hover {
            background-color:#4CAF50;
        }

        #dane{ 
            margin:4px;
            justify-content: center;
        }

         
        </style>
</head>

<body>



<div id="calosc">
    <h1>Witaj w sklepie</h1>
    <form class="form" action="Przetworz.php" method="post">
    <p> Podaj dane kontaktowe: </p>
    <table  style="border : 1px;">
        <tr>
            <th size = "8">Imię:</th>
            <td><input id = "dane" type="text" name= "Imie" size="15" maxlength="20" ></td>
        </tr>
        <tr>
            <th>Nazwisko:</th>
            <td><input id = "dane" type="text" name= "Nazwisko" size="15" maxlength="20" ></td>
        </tr>
        <tr>
            <th>Ulica:</th>
            <td><input id = "dane" type="text" name= "Ulica" size="15" maxlength="20"></td>
        </tr>
        <tr>
            <th>Nr domu/nr mieszkania:</th>
            <td><input id = "dane" type="text" name= "Nrdomu" size="5" maxlength="8"></td>
        </tr>
        </table>
        
    <table >
        <tr >
            <th>Products</th>
            <th>Ilosc</th>
        </tr>
        <tr>
            <th>Opony </th>
            <td><input id = "textBox" type="number" maxlength="3" name="Opony"></td>
        </tr>
        <tr>
            <th>Swiece</th>
            <td><input id = "textBox" type="number" maxlength="3" name="Swiece"></td>
        </tr>
        <tr>
            <th>Oleje</th>
            <td><input id = "textBox" type="number" maxlength="3" name="Oleje"></td>
        </tr>
        </table>
        
        <p>Jak dowiedziałeś sie o sklepie</p>
        <select name = "jak">
                <option value="internet">Z internetu</option>
                <option value="Tv">Z rekalmy telewizyjnej</option>
                <option value="inne"> inne</option>
        </select>
        
        <table >
                <?php
                    $cena = 5;
                    $odleglosc = 10;
                    $ile=10; //ilosc rekordow
                    $wierszy=round($ile/2); //ilosc wierszy
                    echo'<tr><th>'."Cena".'</th><th>'."Odleglosc".'</th></tr>';
                    for($i=0; $i<$wierszy; $i++)
                    {

                    echo '<tr><td>'.($cena *$i).' zl</td><td>'.($odleglosc*$i).' km</td></tr>'; //dzieki temu 1 kolumna wypelnia sie od 0-5 a 2od 6-12
                    }
                ?>
            </table>
        
    <div><input id="guzik" type="submit" value="Złóż zamówienie" ></div>
    </form>
</div>        
 
</body>
</html>
