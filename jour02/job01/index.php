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
           $i =0;
           while ($i <= 1337) {
                echo $i;
                echo "</br>";
                $i++;
                
                if ($i == 42) {
                    echo "<b>".$i."</b>";
                    echo "<u>".$i."</u>";
                }
           }  
        ?>
    </body>
</html>