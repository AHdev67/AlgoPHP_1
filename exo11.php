<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce <br>
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé <br>
d’afficher le nombre de marques de voitures présentes dans le tableau. <br>
<br>
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
</p>

<h2>Résultat</h2>

<?php

/*
We display the number of brands in the array with the .count function, then we display the brands array with a FOR loop,
using the iteration variable to point to the next index. 
*/

$tabMarques= array(
    "Peugeot",
    "Renault",
    "BMW",
    "Mercedes",
);

echo"Il y a ".count( $tabMarques )." marques de voitures dans le tableau : <br>";

//Méthode 1
/*
echo"<ul>";
for ($i= 0; $i<count($tabMarques); $i++) {
    echo "<li> {$tabMarques[$i]} </li>";
}
echo"</ul>";
*/

//Méthode FOREACH préférable pour l'affichage de tableaux
echo"<ul>";
foreach ($tabMarques as $marque) {
    echo "<li>$marque</li>";
}
echo"</ul>";

?>