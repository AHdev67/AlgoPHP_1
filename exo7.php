<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge : <br>
Poussin : entre 6 et 7 ans <br>
Pupille : entre 8 et 9 ans <br>
Minime : entre 10 et 11 ans <br>
Cadet : à partir de 12 ans <br>
Si la catégorie n’est pas gérée, merci de le préciser.</p>

<h2>Résultat</h2>

<?php

/*
We determine the age category of the child with a series of IF conditions based on the max. age that fits within a category.
We also take into account the possibility that the age does not fit in any categories.
*/

$age=10;

//Première version pas opti
/*
if($age>= 6 && $age<= 7){
    echo"L’enfant qui a $age ans appartient à la catégorie « Poussin »";
}
elseif($age>= 8 && $age<= 9){
    echo "L’enfant qui a $age ans appartient à la catégorie « Pupille »";
}
elseif($age>= 10 && $age<= 11){
    echo "L’enfant qui a $age ans appartient à la catégorie « Minime »";
}
elseif($age>= 10 && $age<= 12){
    echo "L’enfant qui a $age ans appartient à la catégorie « Cadet »";
}
else {
    echo "Catégorie Non gérée";
}
*/

//version corrigée
if($age>=12){
    echo "L’enfant qui a $age ans appartient à la catégorie « Cadet »";
}
elseif($age<=11){
    echo "L’enfant qui a $age ans appartient à la catégorie « Minime »";
}
elseif($age<= 9){
    echo "L’enfant qui a $age ans appartient à la catégorie « Pupille »";
}
elseif($age<= 7){
    echo"L’enfant qui a $age ans appartient à la catégorie « Poussin »";
}
else {
    echo "Catégorie Non gérée";
}
?>