<?php
$db = new mysqli("localhost", "root", "" , "ksiegarnia");

if(mysqli_connect_errno()){
    echo "Nie udało się połączyć z sererem " . mysqli_connect_errno();
}


$wyrazenie = "Ramen";
$zapytanie = "SELECT KlientId , Nazwisko FROM klienci Where Nazwisko =?";
$polecenie = $db->prepare($zapytanie);
$polecenie -> bind_param('s', $wyrazenie);
$polecenie -> execute();

$polecenie ->store_result();
$polecenie -> bind_result($klientId, $nazwisko);

echo "<p> Znaleziono " . $polecenie->num_rows. " rekordów <p>";
while($polecenie -> fetch()){
    echo "klient Id: ". $klientId . " nazwisko: ". $nazwisko;
} 

$polecenie ->free_result();
$db ->close();
