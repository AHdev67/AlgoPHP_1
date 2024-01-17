<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité <br>
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Résultat</h2>

<?php

$nbArticles=5;
$prixUnitaire=9.99;
$tauxTVA=0.2;

$facture= $nbArticles*$prixUnitaire * (1+$tauxTVA);

echo"Prix unitaire de l'article : $prixUnitaire € <br>";
echo "Quantité : $nbArticles <br>";
//Correction pourcentage
echo "Taux de TVA : ",$tauxTVA*100,"% <br>";
echo "Le montant de la facture à régler est de : $facture €";

?>