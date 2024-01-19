<h1>Exercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>

<h2>Résultat</h2>

<?php 

//Using str_replace function to replace the word "aujourd'hui" by the word "demain" in the string $phrase.

$phrase = "Notre formation DL commence aujourd'hui";

echo"$phrase <br>";
echo str_replace("aujourd'hui","demain",$phrase);

?>