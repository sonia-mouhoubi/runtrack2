<?php
   $tableau = ['a','e', 'i', 'o', 'u', 'y', 'A','E', 'I', 'O', 'U', 'Y']; 
   $str ="I'm sorry Dave I'm afraid I can't do that..";

   $i = 0;  // Créer un compteur
   while (isset($str[$i])) { // Parcourir $str avec isset
        foreach($tableau as $element) { // Parcourir le tableau avec foreach
            if($str[$i]==$element) { // Si $str == $element
                echo $str[$i]; // Afficher le résultat
            }
        }
        $i++;
    }      
         
?>
 

 