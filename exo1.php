<h1>Exercice 1</h1>

<p>Soit la phrase « Notre formation DL commence aujourd'hui »<br>
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase 
(espaces inclus).</p>

<h2>Résultat</h2>

<?php 

//Using strlen function for counting the number of caracters in the string $phrase.

$phrase = "Notre formation DL commence aujourd'hui";
echo "La phrase « $phrase » contient ".strlen($phrase)." caractères.";

?>