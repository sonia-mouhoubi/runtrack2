<?php
    $tableau = [200, 204, 173, 98, 171, 404, 459];

    foreach($tableau as $element) {
       /* Lorsque j'ecris $tableau as $element, cela m'affiche la valeur direct ds le tableau
       si j'écris $tableau as $key => $value je peux afficher la clé et ou la valeur */
       if($element %2 == 0) { // Si nb modulo 2 est égal à 0 le chiffre est paire ...
            echo $element." est paire </br>";
       }
       else {
        echo $element." est impaire </br>"; //...sinon il est impaire
       }
    }
//var_dump($tableau);
         
?>
 