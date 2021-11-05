<?php
/*
    $str = "I'm sorry Dave I'm afraid I can't
    do that..";
    $i = 0;
    $a  = 'a';

    while (isset($str[$i])) {
        if ($str[$i]==$a) {
            echo $str[$i];
        }
        $i++;

    }*/
    $tableau = ['a','e', 'i', 'o', 'u', 'y', 'A','E', 'I', 'O', 'U', 'Y']; 
    $str ="I'm sorry Dave I'm afraid I can't
    do that..";

    //var_dump($tableau);
    //print_r($tableau);
        for ($i=0; isset($str[$i]);$i++) {
            foreach ($tableau as $element) {
                if ($str[$i] == $element) {
                    echo $str[$i];
                } 
            }
        }
    
    
    
         
?>
 