<?php

    foreach ($_GET as $key => $value) {
        echo '<table>
        <thead>
            <tr>
                <th> Arguments </th>
                <th> Valeurs </th>
            </tr>
        </thead>

        <tbody>
            <td>'.$key.'</td>
            <td>'.$value.'</td>
        </tbody>
    </table>';    }
    
    var_dump ($_GET);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Formulaire." />
        <title>FORMULAIRE</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Festive&family=Scheherazade+New&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Festive&family=Scheherazade+New&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/agenda.css">
    </head>
    <body>
        <header>
            <h1>FORMULAIRE</h1>
        </header>
        <main> 
            <form action="" method="get">
                <legend>Créer un nouvel événement</legend>
                <fieldset>
                    <div class="cat">
                        <label for="cat">Evénement</label>
                        <input type="checkbox" id="cat" name="cat" value="">
                    </div>
                    <div>
                        <label for="tache">Tâche</label>
                        <input type="checkbox" id="cat" name="tache" value="">
                    </div>
                </fieldset> 
                <fieldset>
                    <div class="date">
                        <label for="date">Date</label>
                        <input type="date" id="date" name="date">
                    </div>
                    <div class="time">
                        <label for="time">Heure</label>
                        <input type="time" id="time" name="time">
                    </div>
                </fieldset>
                <fieldset>
                    <div class="titre">
                        <label for="name">Titre</label> 
                        <input value="" type="text" id="name" name="name" placeholder="Tapez votre titre">
                    </div>
                    <div class="description">
                        <label for="msg">Description</label>
                        <textarea id="msg" name="msg" placeholder="Tapez votre description"></textarea>
                    </div>
                </fieldset>
                <button type="submit">Envoyer le message</button>
            </form>  
        </main>
    </body>
</html>
 