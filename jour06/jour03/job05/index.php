<?php

$str ='on n est pas le meilleur quand on le croit mais quand on le sait';

$dic = [
    'voyelles' => ['a','e', 'i', 'o', 'u', 'y'],
    'consonnes' => ['b','c', 'd', 'f', 'g', 'h', 'j','k', 'l', 'm', 'n', 'p', 'q','r', 's', 't', 'v', 'w', 'x', 'z'],
];

$compteur = 0; // COMPTEUR pour compter les voyelles
$compteur2 = 0; // COMPTEUR pour compter les consonnes


    for($i=0; isset($str[$i]); $i++) { // On parcourt $str 
      foreach($dic['voyelles'] as $value) { // On parcourt voyelles
        if ($str[$i] == $value) { // Si $str[$i] est égale à value 
          $compteur++; // Je compte
        }  
       }
      foreach($dic['consonnes'] as $value2) { // On parcourt consonnes
        if ($str[$i] == $value2) { // Si $str[$i] est égale à value 
          $compteur2++; // Je compte
        }        
      }
    }
    echo '<table>
            <thead>
                <tr>
                    <th> Voyelles </th>
                    <th> Consonnes </th>
                </tr>
            </thead>

            <tbody>
                <td>'.$compteur++.'</td>
                <td>'.$compteur2++.'</td>

            </tbody>
        </table>'; 

     
     

?>
 

 