<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui <br>
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.
</p>

<h2>Résultat</h2>

<?php

$cout=152;
$versement=200;
$reste=$versement-$cout;

echo"Le montant à payer est de : $cout <br>";
echo "Le montant versé est de : $versement <br>";
echo "Le reste est de : $reste <br>";

//PAS FINI
$renduB10=$reste/10;
$renduB5=$reste/5;

echo(floor($renduB10)), " billets de 10 € - ",(floor($renduB5)), " Billets de 5 €";

?>