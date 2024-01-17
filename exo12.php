<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée <br>
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue <br>
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») <br>
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG
</p>

<h2>Résultat</h2>

<?php

$names= [
    "Mickael"=>"FRA",
    "Virgile"=>"ESP",
    "Marie-Claire"=> "ENG",
];

/*$greet= [
    "francais"=>"Salut",
    "anglais"=>"Hello",
    "espagnol"=>"Hola",
];
*/
    /*echo"key ".$name. "<br>";
    echo"value " .$value. "<br>";*/

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