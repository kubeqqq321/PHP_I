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
        #skrypt{
            width: auto;

            background-color: #cdd;
            text-align: center;
            justify-content: center;
            margin: 50px;
        }

        table {
            width: 100%;
            margin: 5px;
            padding: 15px;
        }

        table th {
            background-color: #04AA6D;
            color: white;
            height: 30px;
            border-bottom: 1px solid #ddd;
        }

        table td {
            height: 30px;
            border-bottom: 1px solid #ddd;
        }
        table tr:hover {
            background-color: #4CAF50;
        }
    </style>
</head>

<body>


    <div id ="calosc">
        <div id ="skrypt" >

        
        <?php
        echo "<h1>Array</h1>";
        $tablica  = array();
        for ($i = 0; $i < 21; $i++) {
            echo "<p>Produkt_" . $i . "</p>";
        }

        // $tabNazwy =array("Opony" , "Oleje" , "Odświeżacz", "Kola" , "Swiece");

        // $tabCeny = array();


        // $tabcw2 = array();
        // for($i = 0; $i< 6; $i){
        //     $tabCeny
        //     $tabcw2.array() 
        // }

        // Ćwiecznie 2 
        echo "<h1>Array</h1>";
        $tabcw2 = array(
            array("Opony", 100),
            array("Kola", 157),
            array("Oleje", 50),
            array("Odswierzacz", 20),
            array("Swiece", 157),
            array("Skrzynia biegow", 1500),
            array("Fotele", 500),
            array("Kierownica", 100),
            array("Plyn hamulcowy", 157),
            array("tarcze", 50)
        );


        for ($i = 0; $i < count($tabcw2); $i++) {
            for ($j = 0; $j < 2; $j++) {
                echo $tabcw2[$i][$j] . " ";
            }
            echo "<br><br>";
        }


        // Ćwicznie 3 

        $filePath = fopen("dane.txt", "rb");
        $tablicaCw3 = array();




        while (!feof($filePath)) {
            array_push($tablicaCw3, fgets($filePath));
        }



        echo "<table border='1' style='border-collapse: collapse; border-color: silver;'>";
        echo "<tr style='font-weight: bold;'>";
        echo "<td width='150' align='center'>Dane:</td>";
        echo "</tr>";

        foreach ($tablicaCw3 as $row) {
            echo '<td width="150" align=center>' . $row . '</tsd>';
            echo '</tr>';
        }

        ?>
    </div>
    </div>
</body>

</html>





</body>

</html>