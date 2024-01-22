<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée <br>
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue <br>
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») <br>
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG
</p>

<h2>Résultat</h2>

<?php

/*
We associate the right greeting with the names according to their language using a FOREACH loop containing a triple IF condition to check the language.
*/

$names= [
    "Mickael"=>"FRA",
    "Virgile"=>"ESP",
    "Marie-Claire"=> "ENG",
    "Antoine" => "ITA"
];

$salutations = [
    "FRA" => "Salut",
    "ESP" => "Hola",
    "ENG" => "Hello",
];


foreach ($names as $prenom => $langue) {
    //Avec la fonction in_array il faut préciser si on compare avec une clé ou une valeur 
    if(in_array($langue, array_keys($salutations))) {
        echo $salutations[$langue]." ".$prenom."<br>";
    } else {
        echo "Langue non gérée <br>";
    }
}
echo"<br>";

//version désorganisée
foreach($names as $name=>$lang){

    if($lang=="FRA"){
        echo"Salut ".$name. "<br>";
    }

    elseif($lang== "ESP"){
        echo "Hola ".$name."<br>";
    }

    elseif($lang== "ENG"){
        echo "Hello ".$name."<br>";
    }
}
echo"<br>";

//version organisée en ordre alphabetique
ksort($names);
foreach($names as $name=>$lang){
    if($lang=="FRA"){
        echo"Salut ".$name. "<br>";
    }

    elseif($lang== "ESP"){
        echo "Hola ".$name."<br>";
    }

    elseif($lang== "ENG"){
        echo "Hello ".$name."<br>";
    }
}
?>