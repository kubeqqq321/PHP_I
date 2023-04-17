<!doctype html>
    <html>
        <head>
            <meta charset="UTF-8" />
            <title>Wynik zamówienia</title>
            <link rel="stylesheet" type="text/css"  />


        <style>
            body {
    overflow: hidden;
    text-align: center; 
  }
header{
    background-color:#ddd;
    color: white;
    font-size: 140%;
    text-align: center;
    height: 100px;
    width: 600px;
}
#calosc{
    position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%)
}
#lewy{
    background-color: #cdd;
    width: 600px;
    height: 600px;
    color: rgb(0, 0, 0);
    text-align: center;
}
#lewy h2 {text-align: center;}

body,h1,h2,h3{
    margin: 0;
    padding: 0;
}
        </style>

        </head>
        <body>
            <div id = "calosc">
            <header>
                <h1>Szukanie w bazie</h1> 
            </header>
            <section id="lewy">
                 <h2>Wyszukaj</h2></br>

                 <form action="db1.inc.php" method="POST">
                    <select name="wybor">
                        <option value="tytul" selected>Tytuł</option>
                        <option value="autor">Autor</option>
                        <option value="isbn">ISBN</option>
                    </select>
                    <input type="text" name="TextSearch" />
                    <input type="submit" name="submit" value="Szukaj" /> 

                   
                </form>
 
            </section>
            </div>



           
        </body>
    </html>