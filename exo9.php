<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de<br> 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>

<h2>Résultat</h2>

<?php

$age=32;
$sexe='F';

//Première Version
/*
if($sexe=='F' && $age>=18 && $age<= 35) {
    echo"Age : $age <br>";
    echo"sexe : $sexe <br>";
    echo"La personne est imposable";
}
elseif($sexe== 'H' && $age>= 20) {
    echo"Age : $age <br>";
    echo"sexe : $sexe <br>";
    echo"La personne est imposable";
}
else {
    echo"Age : $age <br>";
    echo"sexe : $sexe <br>";
    echo "Non imposable";
}
*/

if($sexe== 'F' && $age>= 18 && $age<= 35 || $sexe== 'H' && $age>= 20){
    echo"Age : $age <br>";
    echo"sexe : $sexe <br>";
    echo"La personne est imposable";
}
else {
    echo"Age : $age <br>";
    echo"sexe : $sexe <br>";
    echo "Non imposable";
}
?>