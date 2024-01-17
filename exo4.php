<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php
//Première version
/*
$phrase= "Engage le jeu que je le gagne";
$phraseDisplay= $phrase;

$phrase= str_replace(" ","",$phrase);
$phrase= strtolower($phrase);
$phraseInverse= strrev($phrase);

if ($phrase == $phraseInverse) {
    echo "La phrase « $phraseDisplay » est un palindrome.";
}
else {
    echo "La phrase « $phraseDisplay » n'est pas un palindrome.";
}
*/

//Version Corrigée
$phrase="Engage le jeu que je le gagne";
$phraseComp=str_replace(" ","",strtolower($phrase));

if(strrev($phraseComp) == $phraseComp){
    echo "La phrase « $phrase » est un palindrome.";
}
else{
    echo "La phrase « $phrase » n'est pas un palindrome.";
}
?>