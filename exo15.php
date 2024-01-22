<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance). <br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge. <br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ; <br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ; <br>
</p>

<h2>Résultat</h2>

<?php

/*
We create a Personne class, taking as attributes a name, surname, birth date and age.
We include with the constructor, getter and setter, a function to calculate the age from the date of birth.
We then create two objects of the Personne class, and display their names, surnames and age.
*/

class Personne{
    private string $_nom;
    private string $_prenom;
    private DateTime $_birthdate;

    public function __construct(string $nom,string $prenom, string $birthdate){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_birthdate = new DateTime($birthdate);
    }

    public function getNom(): string{
        return $this->_nom;
    }

    public function getPrenom(): string{
        return $this->_prenom;
    }

    public function getBirthdate(): DateTime {
        return $this->_birthdate;
    }

    public function setNom(string $nom) {
        $this->_nom = $nom;
    }
    public function calcAge(): string{
        $age = date_diff(($this->_birthdate), new DateTime()); 
        return $age->format("%Y ans");
    }

    public function __toString() {
        return $this->_prenom." ".$this->_nom." ".$this->calcAge()."<br>";
    }
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
echo $p1;

$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
echo $p2;

$p2->setNom($p1->getNom());

echo $p2;


?>