<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance). <br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge. <br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ; <br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ; <br>
</p>

<h2>Résultat</h2>

<?php

Class Personne{
    private $_nom;
    private $_prenom;
    private $_birthdate;
    private $_age;

    public function __construct($nom, $prenom, $birthdate){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_birthdate = new DateTime($birthdate);
    }

    public function getNom(){
        return $this->_nom;
    }

    public function getPrenom(){
        return $this->_prenom;
    }

    public function calcAge(){
        $this->_age = date_diff(($this->_birthdate), new DateTime()); 
        return $this->_age->format("%Y");
    }
}

//echo "Age de la personne : ".$age->format("%Y ans %m mois %d jours"); */

$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
echo $p1->getPrenom(). " ". $p1->getNom()."  a ". $p1->calcAge(). " ans. <br>";

$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
echo $p2->getPrenom(). " ". $p2->getNom()."  a ". $p2->calcAge(). " ans. <br>";
?>