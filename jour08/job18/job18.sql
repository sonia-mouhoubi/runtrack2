SELECT salles.nom, salles.capacite, etage.nom FROM `salles` INNER JOIN `etage` ORDER BY capacite DESC LIMIT 1
