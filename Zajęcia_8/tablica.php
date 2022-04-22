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
                 $com = str_replace("\n"," ",$_POST['comment']);
                

                 $email_to = "ul0246689@edu.lodz.uni.pl";
                 $topic = "Komentarze ze strony WWW";
                 $zawartosc = "Nazwa klienta: ".$surn."\n Adres pocztowy: ".$email."\n Komentarz: ".$com."\n";
                 $email_from = "serwerwww@przyklady.com";
                
                if(stristr($com,"dostawa")) 
                    $email_to = "dostawy@przykladowy.pl";
                if(stristr($com,"sklep"))
                    $email_to = "sprzedaż@przykladowy.pl";
                if(stristr($com,"rachunek")|| stristr($com,"paragon") || stristr($com,"faktura"))
                    $email_to = "ksiegowosc@przykladowy.pl";

                 print_r(nl2br(htmlspecialchars($com)));

                 echo "<br />"."Wysłano do: ".$email_to;
                 //mail($email_to, $topic, $zawartosc, $email_from);

                 
                }
                ?>
    </div>
    </div>
</body>

</html>





</body>

</html>