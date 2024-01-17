<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
</p>

<h2>Résultat</h2>

<?php

$dateNaissance= date_create("17-01-1995");
$dateCourante= date_create("21-05-2018");
$age= date_diff($dateNaissance, $dateCourante);

echo "Age de la personne : ".$age->format("%Y ans %m mois %d jours");

?>