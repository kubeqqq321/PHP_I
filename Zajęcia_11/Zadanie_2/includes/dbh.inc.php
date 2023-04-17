<!-- nie zamychać php -->
<?php

$serverName = "localhost";
$dBLogin = "root"; 
$dBPassword = "";
$dBName = "logins"; //w phpMyAdmin Utworzyc taka baze danych logins badz wlasna
                    // pozniej wejsc do pliku skryptySQL.txt i wykonać 


$connect = mysqli_connect($serverName , $dBLogin, $dBPassword, $dBName);

if(!$connect){
    die("Connection failed". mysqli_connect_error());
}
