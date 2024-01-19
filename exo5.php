<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. <br>
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

/*
We calculate the equivalent in euros of a set amount of francs by multiplicating the value of one euro by the amount of francs,
then we round up to the 2nd decimal with the .round function
*/

$montantFrancs=100;
//Première version (pourquoi j'ai fait comme ça ??)
/*
for($i= 1; $i<=$montantFrancs; $i++) {
    $montantEuros=$i*0.152449;
}
*/

//Version corrigée
$montantEuros=$montantFrancs*0.152449;
echo "Le montant en Francs : $montantFrancs <br>";
echo "$montantFrancs Francs = ".round($montantEuros,2)."€";

?>