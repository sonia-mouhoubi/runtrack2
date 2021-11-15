<?php
    $str = 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';
    for($i=0; isset($str[$i]); $i++) { // Parcourir le TABLEAU avec ISSET 
        if($i % 2 == 0) { // Afficher le caractère s'il est paire 
            echo $str[$i];

        }
    }
         
?>
 

 