<?php 

class Voiture {

	public $nombre_de_roues = 4;
	static $nombre_de_porte = 0;

	// Constructeur
	function __construct(){

		// Le mot clé self correspont à la classe Voiture.
		// Il se traduit soi (soi-même). 
		echo $this->nombre_de_roues . ' roues. (constructeur) <br />';
		echo self::$nombre_de_porte++ . ' portes. (constructeur) <br />';
	}

	// Destructeur
	function __destruct(){
		echo $this->nombre_de_roues . ' roues. (déconstructeur) <br />';
		echo self::$nombre_de_porte-- . ' portes. (déconstructeur) <br />';
	}

	// méthode
	function details(){
		echo $this->nombre_de_roues . ' roues. (méthode details()) <br />';
	}

}

$bmw = new Voiture();
//$merceds = new Voiture();
//$merceds_2 = new Voiture();
$bmw->details();
