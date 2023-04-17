<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Wynik zamówienia</title>
    <link rel="stylesheet" type="text/css" />


    <style>
        body {
            overflow: hidden;
            text-align: center;
        }

        header {
            background-color: #ddd;
            color: white;
            font-size: 140%;
            text-align: center;
            height: 100px;
            width: 600px;
        }

        #calosc {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)
        }

        #lewy {
            background-color: #cdd;
            width: 600px;
            height: 600px;
            color: rgb(0, 0, 0);
            text-align: center;
        }

        #lewy h2 {
            text-align: center;
        }

        body,
        h1,
        h2,
        h3 {
            margin: 0;
            padding: 0;
        }
    </style>

</head>

<body>
    <div id="calosc">
        <header>
            <h1>Komentarze</h1>
        </header>
        <section id="lewy">
            <h2>Komentarz do zamówienia </h2>

            <form action="tablica.php" method="POST">
                <p>Nazwisko:</p>
                <input type="text" name="nazw" size="20" /> <br />
                <p>E-mail:</p>
                <input type="text" name="email" size="20" /> <br />
                <p>Komentarz:</p>
                <textarea rows="4" cols="50" name="comment"> </textarea>
                <br />
                <input type="submit" name="submit" value="Wyślij" /> <br />
            </form>

        </section>
    </div>




</body>

</html>