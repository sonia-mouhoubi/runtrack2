²<?php
    session_start();//COMMENCER MA SESSION
    if(isset($_GET['reset'])) { //Si mon bouton RESET est TRUE
        unset($_SESSION['surname']);//Je DETRUIT ma session
    }

    /* $_SESSION['surname']=0;   
    
      if($_SESSION['surname']=$_GET['prenom']) {
            if(isset($_GET['valider'])); {
                echo $_SESSION['surname'];

            }*/
        if(!isset($_SESSION['surname'])) { //Si ma session n'existe pas
            $_SESSION['surname']=''; // Je la créer et 
        }
   
       if(isset($_GET['prenom'])) { //
           $_SESSION['surname'].=$_GET['prenom'].'<br>';
       }
       echo $_SESSION['surname'];
?>

<!DOCTYPE html>
<html lang="fr">
    <form action="#" method="get">

    <input type="text" name="prenom" placeholder="prenom">
        <button type="submit" name="valider">Valider</button>
        <button type="submit" name="reset">Reset</button>
    </form>
</html> 

