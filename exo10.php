<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui <br>
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.
</p>

<h2>Résultat</h2>

<?php

/*
We separate the leftover change in 10 euro bills using the intdiv function to give us an integer result for the division, then we use modulo to update the leftover
and we move on to 5 euro bills, then 2 euro coins ...etc.
*/

$cout= 152;
$versement= 200;
$reste= $versement-$cout;

echo"Le montant à payer est de : $cout <br>";
echo "Le montant versé est de : $versement <br>";
echo "Le reste est de : $reste <br>";

//Méthode "Bac L"

/*
$renduB10= intdiv($reste,10);
$reste= $reste - ($renduB10*10);
$renduB5= intdiv($reste,5);
$reste= $reste - ($renduB5*5);
$renduP2= intdiv($reste,2);
$reste= $reste - ($renduP2*2);
$renduP1= $reste;
*/

//Méthode modulo

$renduB10= intdiv($reste,10);
$reste= $reste%10;
$renduB5= intdiv($reste,5);
$reste= $reste%5;
$renduP2= intdiv($reste,2);
$reste= $reste%2;
$renduP1= $reste;


echo "$renduB10 billet(s) de 10 € - $renduB5 billet(s) de 5 € - $renduP2 pièce(s) de 2 € - $renduP1 pièce(s) de 1 €";

?>