<?php

   function calcule($a, $operation, $b){
       if($operation == '+') {
        return $operation = $a+$b;
       }
       if($operation == '-') {
        return $operation = $a-$b;
       }
       if($operation == '*') {
        return $operation = $a*$b;
       }
       if($operation == '/') {
        return $operation = $a/$b;
       }
   }
  
   echo calcule(7, '/', 10);


?>
