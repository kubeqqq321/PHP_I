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


    </style>
</head>

<body>


    <div id ="calosc">
        <div id ="skrypt" >
            <h1>Komentarze</h1>
        <?php



                 if(isset($_POST['submit']))
                 {
                 $surn = trim($_POST['nazw']," ");
                 $email = trim($_POST['email']," ");
                 $coment = str_replace("\n"," ",$_POST['comment']);
                

                 $email_to = "ul0246689@edu.lodz.uni.pl";
                 $topic = "Komentarze ze strony WWW";
                 $zawartosc = "Nazwa klienta: ".$surn."\n Adres pocztowy: ".$email."\n Komentarz: ".$coment."\n";
                 $email_from = "serwerwww@przyklady.com";
                
                if(stristr($coment,"dostawa")) 
                    $email_to = "dostawy@przykladowy.pl";
                if(stristr($coment,"sklep"))
                    $email_to = "sprzedaż@przykladowy.pl";
                if(stristr($coment,"rachunek")|| stristr($coment,"paragon") || stristr($coment,"faktura"))
                    $email_to = "ksiegowosc@przykladowy.pl";

                
                if(stristr($coment,"dostawa")&& stristr($coment,"sklep"))
                    $email_to ="dostawy@przykladowy.pl  </br> 
                            sprzedaż@przykladowy.pl";

                if(stristr($coment,"dostawa")&& stristr($coment,"faktura"))
                    $email_to ="dostawy@przykladowy.pl  </br> 
                            ksiegowosc@przykladowy.pl";

                if(stristr($coment,"sklep")&& stristr($coment,"faktura"))
                    $email_to ="sprzedaż@przykladowy.pl  </br> 
                                ksiegowosc@przykladowy.pl";

                if(stristr($coment,"dostawa")&& stristr($coment,"sklep") && stristr($coment,"faktura"))
                    $email_to = "ksiegowosc@przykladowy.pl </br>
                                 dostawy@przykladowy.pl  </br> 
                                 sprzedaż@przykladowy.pl";

                }                 
                print_r(nl2br(htmlspecialchars($coment)));

                 echo "<br />"."Wysłano do: </br>" .$email_to;
                 //mail($email_to, $topic, $zawartosc, $email_from);


                echo "</br>";
                 $explod = explode(" " ,$coment);
                 for ($i = 0; $i<sizeof($coment); $i++){
                    echo $explod[$i];
                 }
                
               
                



                ?>
    </div>
    </div>
</body>

</html>





</body>

</html>