SELECT salles.nom AS BiggestRoom, salles.capacite, etage.nom FROM `salles` INNER JOIN `etage` ON id_etage = etage.id ORDER BY capacite DESC LIMIT 1
