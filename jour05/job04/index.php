<?php

   function leetspeak($a, $operation, $b){
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
  
   echo leetspeak(7, '*', 10);


?>
