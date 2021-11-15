<?php 
for ($i=0; $i<=100; $i++) {
    if($i % 3 == 0 && $i % 5 == 0) { //Un nombre est divisible par 5 si son modulo 5 est nul.
        echo "FIZZBUZZ<br>";
    }
    elseif($i % 3 == 0) { //Un nombre est divisible par 3 si son modulo 3 est nul.
        echo "FIZZ<br>";
    }
    elseif($i % 5 == 0) { //Un nombre est divisible par 5 si son modulo 5 est nul.
        echo "BUZZ<br>";
    }
    elseif($i % 3 == 0 && $i % 5 == 0) { //Un nombre est divisible par 5 si son modulo 5 est nul.
        echo "FIZZBUZZ<br>";
    }
    else {
        echo $i."<br>";
    }
}


?>