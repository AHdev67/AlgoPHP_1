<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :
</p>

<h2>Résultat</h2>

<?php

$table=8;

//méthode 1
for($i = 1;$i <=10;$i++) {
    echo"$table x $i = ", $table*$i, "<br>";
}

echo "<br>";

//méthode 2
foreach(range(1,10)as $iteration) {
    echo "$table x $iteration = ", $table*$iteration, "<br>";
}

?>