<?php
// requête SQL
$sql = "DELETE FROM personne WHERE Nom LIKE 'VERSE'";
// Suppression des données
$base->exec($sql);
echo "Personne supprimée💣";