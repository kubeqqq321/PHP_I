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


            <?php
            header('Content-type:obraz/png');
            $imgWidth = 360;
            $imgHeight = 360;
            $image = imagecreatetruecolor($imgWidth,$imgHeight);
            $R = 255; $G = 59; $B=167;



            for ($i = 0 ; $i<255 ; $i++){
                $color = imagecolorallocate($image,$R,$G,$B);
                imageline($image,0,$i,$imgWidth,$i,$imgHeight,$color);
            }
            


            
            imagepng($image);
            imagepng($image,'save1.png');
           
            imagedestroy($image);

            ?>

        </div>
    </div>
</body>

</html>





</body>

</html>