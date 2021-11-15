<?php 
 $VAR_bool = true; // Var booléen
 $VAR_age = 33; // Var entier
 $VAR_prenom = "Sonia"; // Var caractère
 $VAR_distance = 3.3; // Var float

 echo '
        <table>
            <thead>
                <tr>
                    <th>TYPE</th>
                    <th>NOM</th>
                    <th>VALEUR</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th> variable de type BOOLEENNE </th>
                    <td> $bool </td>
                    <td>'.$VAR_bool.'</td>
                </tr>
                <tr>
                    <th> variable de type ENTIER </th>
                    <td> $age </td>
                    <td>'.$VAR_age.' </td>
                </tr>
                <tr>
                    <th> variable de type CARACTERE </th>
                    <td> $prenom </td>
                    <td>'.$VAR_prenom.' </td>
                </tr>
                <tr>
                    <th> variable de type FLOAT </th>
                    <td> $distance </td>
                    <td>'.$VAR_distance.' </td>
                </tr>
            </tbody>
        </table>';


?>