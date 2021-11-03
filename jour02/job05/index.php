<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Runtrack 2 Jour 1</title>        
        <meta name="description" content="Premier jour de la Runtrack 2 PHP" />
    </head>
    
    <body>
        <?php
           

            for ($i=2; $i<=1000; $i++) { 
                $compteur=0;
                for ($diviseur=1; $diviseur<1000; $diviseur++) {
                    if ($i % $diviseur ==0) {
                        $compteur++;
                    }
                }
              if ($compteur == 2) {
                echo $i.'</br>';

              }
            }

        ?>
        
    </body>
</html>