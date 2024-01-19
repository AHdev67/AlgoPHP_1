<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :
</p>

<h2>Résultat</h2>

<?php

/*
We use a loop to display the multiplication table of a given number by * it with the iteration variable of the loop.
We use the FOR, FOREACH and WHILE methods.
*/

$table=8;

//méthode for
for($i = 1;$i <=10;$i++) {
    echo"$table x $i = ", $table*$i, "<br>";
}

echo "<br>";

//méthode foreach
foreach(range(1,10)as $iteration) {
    echo "$table x $iteration = ", $table*$iteration, "<br>";
}

echo "<br>";

//méthode while
$j=1;
while($j<=10) {
    echo "$table x $j =", $table*$j,"<br>";
    $j++;
}

?>