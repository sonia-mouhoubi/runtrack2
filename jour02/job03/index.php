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
            for ($i=0; $i<=100; $i++) { 

                if ($i>=0 && $i<=20) {
                    echo '<i>'.$i.'</i>'.'</br>';
                }
                else if ($i>=25 && $i<=50 && $i!=42) {
                    echo '<u>'.$i.'</u>'.'</br>';
                }
                else if ($i==42) {
                    echo 'La Plateforme_'.'</br>';
                }
                else {
                    echo $i.'</br>';

                }
            }

        ?>
        
    </body>
</html>