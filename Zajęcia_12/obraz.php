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
