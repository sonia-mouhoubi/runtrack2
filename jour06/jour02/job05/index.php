<?php 
for ($i=2; $i<=1000; $i++) { // Je crééer une boucle pour afficher $i jusqu'à 1000
    $compteur = 0; // Je créér un compteur pour pouvoir diviser chaque nombre pour verifier si c'est un nombre premier
    for($diviseur=1;$diviseur<=$i; $diviseur++) { /* Un nb premier est soit divible par 1 ou par lui même
                                                 Je créér une boucle FOR avec un diviseur qui commence à 1 et qui va 
                                                 diviser $i jusqu'à ce qu'il soit diviser par lui même 
                                                 Exemple avec le chiffre 5 
                                                 5 % 1 = 0 il est donc divisible par 1
                                                 5 % 2 = 1
                                                 5 % 3 = 2
                                                 5 % 4 = 1
                                                 5 % 5 = 0 il est donc divisible par lui même
                                                 */

        if($i % $diviseur == 0) { // Si $i modulo de $diviseur est = 0 le nombre est soit divisible par 1 iu lui même
            $compteur++; // Je l'incrémente
        }
    }
    if($compteur == 2) { /* Mais comme les autres chiffres sont aussi divible par 1 et par eux je lui indique qu'il 
                         en arrête de compter jusqu'à la 2eme division car un nombre premier n'est donc divisible que 
                         2 fois */
        echo $i."<br>";
    }
}



?>