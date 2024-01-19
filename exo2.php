<h1>Exercice 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots 
contenus dans celle-ci.</p>

<h2>Résultat</h2>

<?php 

//Using str_word_count for counting the number of words in the string $phrase.

$phrase = "Notre formation DL commence aujourd'hui";
echo "La phrase « $phrase » contient ".str_word_count($phrase)." mots.";

?>