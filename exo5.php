<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. <br>
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

$montantFrancs=100;

for($i= 1; $i<=$montantFrancs; $i++) {
    $montantEuros=$i*0.152449;
}

echo "Le montant en Francs : $montantFrancs <br>";
echo "$montantFrancs Francs = $montantEuros €";

?>