
<?php 
$recipes = ['Cassoulet', 1,'Couscous'];
$recipes = array('Cassoulet', 1,'Couscous');

$recipes[0] = 'Cassoulet';
$recipes[1] = 'Couscous';

//AFFICHER LE TABLEAU 
var_dump($recipe);

// Concaténation 
echo 'La case "nom" est'.$recipes[0];

$user = [
    'prenom '=> 'sonia',
    'age '=> 35,
    'etudiant '=> true,
];
/* Boucle FOR EACH
for($i=0); $i < 5 ; $i++; {
    echo$recipe[$i];
}*/
$student = [
    'prenom '=> 'sonia',
    'age '=> 35,
    'etudiant '=> true,
]
foreach($recipient as $element) {
    echo $element;
}

while (isset($str[$i])) {
    if($i %2 == 0);
  
   echo $str[$i];
}
var_dump($i);
print_r($i);

$hauteur= 5;
//Boucle total de ligne (Horisontal)
for ($i = 0; $i < $hauteur; $i++)
{
    //Boucle des espaces, on retire 1 espace a
    //chaque fois qu'on dessens d'une ligne
    // exemple
    // 1er ligne : $k = ($hauteur - $i) = 5 = (5 - 0)
    // 2eme ligne: $k = ($hauteur - $i) = 4 = (5 - 1)
    // 3eme ligne: $k = ($hauteur - $i) = 3 = (5 - 2)
    // Insi de suite jusqu'a 0
    for ($k = ($hauteur - $i); $k > 0; $k--)
    {
        echo " ";
    }
    //Bloucle d'etoiles on ajoute a fur et a mesure
    // 1er ligne : $z <= $i = 0 <= 0 (Donc on en met une )
    // 2eme ligne: $z <= $i = 0 <= 1 (Donc on en met deux )
    // et insi de suite a chaque fois $z doit etre pareil que $i
    for($z=0;$z<=$i;$z++)
    {
        echo "*";
    }
    echo "<br />";
}

    <?php
    $hauteur= 5;
     
    for ($i = 0; $i < $hauteur; $i++)
    {
    for ($k = 0; $k < $hauteur; $k++)
    {echo " ";}
    for($z=0;$z<=$i;$z++)
    {echo "*";
    }
    echo "<br />";
    }
    ?>
   
?>

