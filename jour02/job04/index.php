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
                if ($i % 5 == 0 && $i % 3 == 0) { 
                    echo 'FizzBuzz'.'</br>';
                }
                else if ($i % 3 == 0) { //  
                    echo 'Fizz'.'</br>';
                }
                else if ($i % 5 == 0) { 
                    echo 'Buzz'.'</br>';
                }
               
                else {
                    echo $i.'</br>';

                }
            }

        ?>
        
    </body>
</html>