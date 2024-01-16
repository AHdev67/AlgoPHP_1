<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

$phrase= readline("Entrez une phrase: ");
$phraseDisplay= $phrase;

$phrase= str_replace(" ","",$phrase);
$phrase= strtolower($phrase);
$phraseInverse= strrev($phrase);

if ($phrase == $phraseInverse) {
    echo "La phrase ",$phraseDisplay," est un palindrome.";
}
else {
    echo "La phrase ",$phraseDisplay," n'est pas un palindrome.";
}

?>