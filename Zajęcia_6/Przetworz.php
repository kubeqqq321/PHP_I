<!DOCTYPE html>
<html>

<head>
    <title>Przetworz</title>


    <style>
        h1 {
            color: red;
        }


        #calosc {
            width: 600px;
            height: auto;
            background-color: #ddd;
            text-align: center;
            justify-content: center;
            transform: translate(75%);
        }
    </style>
</head>

<body>


    <div id="calosc">
        <?php

        $imie = $_POST['Imie'];
        $nazwisko = $_POST['Nazwisko'];
        $ulica = $_POST['Ulica'];
        $nrdomu = $_POST['Nrdomu'];



        if (empty($imie || $nazwisko || $ulica || $nrdomu)) {
            echo "<h1>Musisz wprowadzić wszytskie potrzebne dane.</h1>";
        } else {
            define("Opony", 125.98);
            define("Oleje", 122.30);
            define("Swiece", 33.99);
            $opony = $_POST["Opony"];
            $oleje = $_POST["Oleje"];
            $swiece = $_POST["Swiece"];
            $jak = $_POST["jak"];
            echo '<h2>Dziękujemy za złożenie zamówenia</h2>';
            echo "<h3>Wynik zamównienia</h3>";


            if (empty($opony || $oleje || $swiece)) {
                echo "Nic nie zostalo zamówione. <br>";
            } else {
                echo "<p><strong>Cena za sztuke: </strong></p>";
                echo "Opony = " . Opony . "<br>";
                echo "Oleje = " . Oleje . "<br>";
                echo "Swiece = " . Swiece . "<br><br>";
                //ilosc opon
                echo "opony w ilości:   " . htmlspecialchars($opony) . "  -- Za łączną kwotę " . (float)$opony * Opony . " zl <br>";
                //ilosc oleji 
                echo "oleje w ilości:   " . htmlspecialchars($oleje) . "  -- Za łączną kwotę " . (float)$oleje * Oleje . " zl <br>";
                //ilosc swiec
                echo "swiece w ilosći:    " . htmlspecialchars($swiece) . "  -- Za łączną kwotę " . (float)$swiece * Swiece . " zl <br>";

                echo "----------------------------------------------<br>";
                echo "<strong> Do zapłaty: </strong> " . "<strong>" . (float)$opony * Opony + (float)$oleje * Oleje + (float)$swiece * Swiece . "</strong> zl <br><br>";
            }

            switch ($jak) {
                case "internet":
                    echo "twoja odpowiedz to: internet <br>";
                    break;
                case "Tv":
                    echo "twoja odpowiedz to: z reklamy telewizyjnej <br>";
                    break;
                case "inne":
                    echo "twoja odpowiedz to: Inne <br>";
                    break;
            }

            echo "Zamówienie zosało złozone: " . date("d-m-Y") . date(" H:i:s") . "<br><br>";

            //     $XYZ = sprintf("%03d", 000);
            //     $new_date = date('Y-m-d-h');

            //     for ($temp = sprintf("%03d", 000); $temp < sprintf("%03d", 999); sprintf("%03d", $temp++)) {
            //         if (!file_exists($new_date . sprintf("%03d", $temp) . '.txt')) {
            //             $XYZ = sprintf("%03d", $temp);
            //             sprintf("%03d", $XYZ);
            //             $temp = sprintf("%03d", 1000);
            //         }
            //     }

            //     @$to_file = fopen($new_date . sprintf("%03d", $XYZ) . '.txt', 'ab');



            //     fwrite($to_file, $imie . "\n");
            //     fwrite($to_file, $nazwisko . "\n");
            //     fwrite($to_file, $ulica . "\n");
            //     fwrite($to_file, $nrdomu . "\n");
            //     fwrite($to_file, 'Opon: ' . $opony . "\n");
            //     fwrite($to_file, 'Oleju: ' . $oleje . "\n");
            //     fwrite($to_file, 'Świec: ' . $swiece . "\n");
            //     fwrite($to_file,  "Zamówienie zosało złozone: " . date("d-m-Y") . date(" H:i:s"));
            //     fclose($to_file);



        }


        ?>
    </div>
    <div>
        <h2>Zamówienia klientów</h2>
        <?php

        // @$fp = fopen("D:/xampp1/htdocs/PHP_2022/Zajęcia_5/2022-03-22-10000.txt" , 'rb');
        // flock($fp,LOCK_SH); //zablowkoanie pliku do odczytu
        // if(!$fp){
        //     echo "<p>Brak zamówień</>";
        //     exit;
        // }
        // while(!feof($fp)){
        //     $zamowienie = fgets($fp);
        //     echo $zamowienie. "<br>";
        // }

        // flock($fp,LOCK_UN); // zwolnienie blokady pliku
        // fclose($fp)


        // ćwiczenie 1 
        // @$fp = fopen("D:/xampp1/htdocs/PHP_2022/Zajęcia_5/2022-03-22-10000.txt" , 'rb');
        // flock($fp,LOCK_SH); //zablowkoanie pliku do odczytu
        // if(!$fp){
        //     echo "<p>Brak zamówień</>";
        //     exit;
        // }

        // while(!feof($fp)){
        //     $zamowienie = fgetc($fp);
        //     if($zamowienie != '\n'){

        //         echo $zamowienie; 
        //     }

        // }




        // ćwiczenie 2
        // @$fp = fopen("D:/xampp1/htdocs/PHP_2022/Zajęcia_5/2022-03-22-10000.txt" , 'rb');
        // flock($fp,LOCK_SH); //zablowkoanie pliku do odczytu
        // if(!$fp){
        //     echo "<p>Brak zamówień</>";
        //     exit;
        // }

        // $filename = 'D:/xampp1/htdocs/PHP_2022/Zajęcia_5/2022-03-22-10001.txt';
        // while(!feof($fp)){
        //     echo nl2br(fread($fp, filesize($filename)));  

        // }

        // flock($fp,LOCK_UN); // zwolnienie blokady pliku
        // fclose($fp)


        ?>


    </div>


</body>

</html>





</body>

</html>