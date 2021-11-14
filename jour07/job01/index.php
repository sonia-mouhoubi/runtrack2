<?php
    session_start();
    if(isset($_GET['reset'])) {
        unset($_SESSION['nbvisites']);
    }

       if (isset($_SESSION['nbvisites'])) {
           $_SESSION['nbvisites']++;
       }
        else {
            $_SESSION['nbvisites']=0;
        }
        echo $_SESSION['nbvisites'];



       
?>

<!DOCTYPE html>
<html lang="fr">
    <form action="#" method="get">
        <button type="submit" name="reset">Reset</button>
    </form>
</html> 

