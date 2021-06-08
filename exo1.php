<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Methode POO : exo 1</h1>

<p>exo 1 : Créez une classe Film avec les attributs :
	id, nom, réalisateur, année
	Un constructeur
	Les getters et setters associés0</p>
<?php

// création d'une classe film

class Film {
    private $id;
    private $nom;
    private $realisateur;
    private $annee;

    // le constructeur de la classe a 4 parametres

    public function __construct($p1, $p2, $p3, $p4) {

        $this->id = $p1;
        $this->nom = $p2;
        $this->realisateur = $p3;
        $this->annee = $p4;

    }

    // getter

    public function getid() {
        return $this->id;
    }

    public function getnom() {
        return $this->nom;
    } 

    public function getrealisateur() {
        return $this->realisateur;
    } 

    public function getannee() {
        return $this->annee;
    }

    // setter

    public function setid($id) {
         $this->id = $id;
    }

    public function setnom($nom) {
         $this->nom = $nom;
    } 

    public function setrealisateur($realisateur) {
         $this->realisateur = $realisateur;
    } 

    public function setannee($annee) {
         $this->annee = $annee;
    }


    

    // appel d'une fonction describe pour afficher les résultats

    public function describe (){
        echo 
    'id: ' . $this->id . 
    '<br/>nom: ' . $this->nom . 
    '<br/>realisateur: ' . $this->realisateur . 
    '<br/>annee: ' . $this->annee . '<br/><br/>';
    }
}


$movie1 = new Film(1, 'La communauté de l\'anneau', 'Peter Jackson', 2001);
$movie1->describe();

$movie2 = new Film (2, 'Les deux tours', 'Peter jackson', 2002);
$movie2->describe();

$movie3 = new Film (3, 'Le retour du roi', 'Peter Jackson', 2003);
$movie3->describe();

// $movie1->setnom('la cité de la peur');
// echo $movie1->getnom();

?>
    
</body>
</html>



