<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Methode POO : exo 2</h1>

<p>exo 2 : Créez une classe Calculatrice qui pourra faire, pour deux chiffres qui lui seront passées en paramètres de ses méthodes :
	Une addition
	Une soustraction
	Une multiplication
	Une division
	Un modulo
En revanche je dois pouvoir me servir de ses méthodes sans instancier la classe Calculatrice. Trouvez comment.</p>

<?php

class calculatrice {
	public $nombre1 = 5;
	public $nombre2 = 3;

	public function __construct($c1, $c2, $c3, $c4, $c5){

		$this->$addition = $c1;
		$this->$soustraction = $c2;
		$this->$multiplication = $c3;
		$this->$division = $c4;
		$this->$modulo = $c5;

	}

	public function test(){

	$c1=$nbr1+$nbr2;
	$c2=$nbr1-$nbr2;
	$c3=$nbr1*$nbr2;
	$c4=$nbr1/$nbr2;
	$c5=$nbr1%$nbr2;

	}	

}


?>

<h1 class="test">test</h1>
  
</body>
</html>



