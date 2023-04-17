<?php

if(isset($_POST['submit']))
{
    $choice = $_POST['wybor'];
    $szukane = $_POST['TextSearch'];

    $isbn;
    $autor;
    $tytul;
    $cena;
    $suma;



    if(isset($choice)){
                        
        $TextSearch = $_POST['TextSearch'];

        if(isset($TextSearch)){

            $db = new mysqli("localhost", "root", "" , "ksiegarnia");

            if(mysqli_connect_errno()){
                echo "Nie udało się połączyć z sererem " . mysqli_connect_errno();
            }

        }
        
    }
    switch($choice){
        case 'isbn':
             $sql="SELECT count(*) FROM ksiazki WHERE ISBN='$TextSearch'";
             break;
        case 'autor':
            $sql="SELECT count(*) FROM ksiazki WHERE Autor='$TextSearch'";
            break;
        case 'tytul':
            $sql="SELECT count(*) FROM ksiazki WHERE Tytul='$TextSearch'";
            break;
    }

    $wynik=$db->prepare($sql);

    $wynik->execute();

    $wynik->bind_result($suma);

    while ($wynik->fetch()) {
        echo "Wykryto: ".$suma." wierszy <br>";
        echo $TextSearch;
    }

$db ->close();

}
