<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). <br>
Elle devra être affichée avec 2 décimales.
</p>

<h2>Résultat</h2>

<?php

/*
We calculate the average using the array_sum and count functions, nested within a round function to give us a result rounded to the 2nd decimal.
Then we use a FOREACH loop to display the notes arrays.
*/

$notes=[
    10,
    12,
    8,
    19,
    3,
    16,
    11,
    13,
    9,
];

$moyenne= round(array_sum($notes)/count($notes),2);

echo"Les notes obtenues par l’élève sont: ";
foreach($notes as $note)
{
  echo $note, " ";
}
echo "<br>";
echo"Sa moyenne générale est donc de : ",$moyenne;

?>