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
            $str = "LaPlateforme";
            echo $str.'<br/>';

            $str2 = "Vive";
            $str3 = "!";
            echo $str2.$str.$str3.'<br/>';

            $val = 6;
            echo $val.'<br/>';
            
            //$val = $val+4;
            $val+=4;
            echo $val.'<br/>';

            $myBool = true;
            echo $myBool;

            $myBool = false;
            echo $myBool;
        ?>
    </body>
</html>