<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

/*
Using str_replace and strtolower functions to remove spaces and upper cases in the string $phrase, that we then store in a variable $phrasecomp.
IF the string $phrasecomp is equal to $phrasecomp that we inverted using the strrev function, THEN it is a palindrome, ELSE it isn't.
*/

//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------//

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