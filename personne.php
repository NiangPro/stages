<?php 

class Personne {
    protected $prenom;
    protected $nom;

    public function __construct($prenom, $nom)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    public function setNom($nom){
        if (ctype_alpha($nom)) {
            $this->nom = $nom;
        }else{
            echo "Le nom doit avoir uniquement des lettres";
        }
    }

    public function getNom(){
        return $this->nom;
    }

    public function afficher(){
        echo "<br>Prenom: ".$this->prenom;
        echo "<br>Nom: ".$this->nom;
    }
}

class Etudiant extends Personne{
    public $matricule;

    public function __construct($prenom, $nom, $matricule)
    {
        // $this->prenom = $prenom;
        // $this->nom = $nom;
        parent::__construct($prenom, $nom);
        $this->matricule = $matricule;
    }

    public function afficher(){
        parent::afficher();
        echo "<br> Matricule:".$this->matricule;
    }
}


$seynabou = new Personne("Nabou", "Sarr");
// $seynabou->prenom = "Nabou";
// $seynabou->nom = "Sarr";
$seynabou->afficher();

$seraph = new Personne("Seraph", "Diop");

$seraph->setNom("Fall");
// $seraph->prenom = "Seraph";

// echo $seraph->prenom." - ".$seraph->nom;
$seraph->afficher();

$et1 = new Etudiant("Abdou", "DIa", "ET0001");

// echo "<br> Prenom:".$et1->prenom;
$et1->afficher();

echo $et1->getNom();