SELECT salles.nom, etage.nom        -- les colonnes qu'ont veut voir apparaitre
FROM salles                         -- la table de base
INNER JOIN etage                    -- ajouter la 2eme table
WHERE salles.id_etage = etage.id    -- faire correspondre les valeurs des 2 colonnes