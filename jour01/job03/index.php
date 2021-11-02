<?php
    $nomvar1 = "TYPE";
    $nomvar2 = "NOM";
    $nomvar3 = "VALEUR";

    $bool = true; // Var booléen
    $age = 33; // Var entier
    $prenom = "Sonia"; // Var caractère
    $distance = 3.3; // Var float
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Runtrack 2 Jour 1</title>        
        <meta name="description" content="Premier jour de la Runtrack 2 PHP" />
        <link href="css/style.css" rel="stylesheet">
    </head>
    
    <body>
        <main>
            <section>
                <h1> TABLEAU en HTML avec du PHP inclus </h1>
                <table>
                    <thead>
                        <tr>
                            <th> <?php echo $nomvar1; ?> </th>
                            <th> <?php echo $nomvar2; ?> </th>
                            <th> <?php echo $nomvar3; ?> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th> <?php echo "variable de type BOOLEENNE"; ?> </th>
                            <td> <?php echo '$bool'; ?> </td>
                            <td> <?php echo $bool; ?> </td>
                        </tr>
                        <tr>
                            <th> <?php echo "variable de type ENTIER"; ?> </th>
                            <td> <?php echo '$age'; ?> </td>
                            <td> <?php echo $age; ?> </td>
                        </tr>
                        <tr>
                            <th> <?php echo "variable de type CARACTERE"; ?> </th>
                            <td> <?php echo '$prenom'; ?> </td>
                            <td> <?php echo $prenom; ?> </td>
                        </tr>
                        <tr>
                            <th> <?php echo "variable de type FLOAT"; ?> </th>
                            <td> <?php echo '$distance'; ?> </td>
                            <td> <?php echo $distance; ?> </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section>
                    <h2>TABLEAU généré en PHP</h2>
                <?php 
                    echo '
                    <table>
                        <thead>
                            <tr>
                                <th>'.$nomvar1.'</th>
                                <th>'.$nomvar2.'</th>
                                <th>'.$nomvar3.'</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th> variable de type BOOLEENNE </th>
                                <td> $bool </td>
                                <td>'.$bool.'</td>
                            </tr>
                            <tr>
                                <th> variable de type ENTIER </th>
                                <td> $age </td>
                                <td>'.$age.' </td>
                            </tr>
                            <tr>
                                <th> variable de type CARACTERE </th>
                                <td> $prenom </td>
                                <td>'.$prenom.' </td>
                            </tr>
                            <tr>
                                <th> variable de type FLOAT </th>
                                <td> $distance </td>
                                <td>'.$distance.' </td>
                            </tr>
                        </tbody>
                    </table>';
                    
                ?>
            </section>
        </main>
    </body>
</html>