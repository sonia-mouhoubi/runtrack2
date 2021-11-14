<?php

   function leetspeak($str){
    $lspeak = ['A'=>4,'B'=>8,'E'=>3,'G'=>6,'L'=>1,'S'=>5,'T'=>7,'a'=>4,'b'=>8,'e'=>3,'g'=>6,'l'=>1,'s'=>5,'t'=>7];
       
        for($i=0; isset($str[$i]); $i++) {
            foreach ($lspeak as $key => $value) {
                if($str[$i]== $key) {
                    $str[$i]=$value;
                }
        }
            
       }
       return $str;
   }   
   echo leetspeak('leet speak');


?>
