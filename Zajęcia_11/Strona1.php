<!DOCTYPE html>
<html>

<head>
    <title>Przetworz</title>


    <style>
        h1 {
            color: greenyellow;
        }


        #calosc {
            width: auto;
            height: auto;
            background-color: #ddd;
        }

        #skrypt {
            width: auto;
            background-color: #cdd;
            text-align: center;
            justify-content: center;
            margin: 50px;
        }
    </style>
</head>

<body>


    <div id="calosc">
        <div id="skrypt">
            <h1>Komentarze</h1>

            <a href="Strona2.php">Przejdź do drugiej strony</a> <br /> 
               
               <?php
                   session_start();
                   $_SESSION['zmienna'] = "Hello World";
               ?>

        </div>
    </div>
</body>

</html>





</body>

</html>