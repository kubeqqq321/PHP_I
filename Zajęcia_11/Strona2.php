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
            <a href="Strona2.php">Przejdź do strony drugiej</a> <br />
            <a href="Strona3.php">Przejdź do strony trzeciej</a> <br /> 
            <?php
                session_start();

                echo '$_SESSION[zmienna] = '. $_SESSION['zmienna'];

                unset($_SESSION['zmienna']);

            ?>
        </div>
    </div>
</body>

</html>





</body>

</html>