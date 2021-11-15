<?php
    

  for ($i=2; $i<=1000; $i++) { 
        $compteur=0;
        for ($diviseur=1; $diviseur<1000; $diviseur++) {
            if ($i % $diviseur == 0) {
                $compteur++;
            }
        }
        if ($compteur == 2) {
        echo $i.'</br>';

        }
    }
     /*  for ($i=1; $i>=1000; $i++) {
        echo $i.'</br>';

    }*/

?>
