<?php
// SE CONNECTER A LA BASE DE DONNEE
$bdd = mysqli_connect("localhost", "root", "", "jour08");
//Faire une requete
$requete = mysqli_query($bdd, "SELECT * FROM etudiants");
//Recuperer le resultat 
$resultat = mysqli_fetch_all($requete, MYSQLI_ASSOC);

//var_dump($resultat);

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <?php 
                foreach($resultat as $key => $value) {
                    foreach($value as $key2 => $value2) {
                        echo "<th>".$key2."</th>";
                    } 
                    break;
                }?>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($resultat as $key => $value) {
                echo "<tr>";
                foreach($value as $key2 => $value2) {
                    echo "<th>".$value2."</th>";
                } 
                echo "</tr>";

            }
            ?>
        </tbody>
    </table>
</body>
</html>
