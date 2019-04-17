<?php 

class Voiture {

	public $nombre_de_roues = 4;
	static $identitiant = 69000;

	// Constructeur
	function __construct(){

		// Le mot clé self correspont à la classe Voiture.
		// Il se traduit soi (soi-même).
		// Ici dans le constructeur on l'incrémente ainsi lorsque l'on va
		// instancier une nouvelle Voiture, celle-ci aura un identifiant incrémenté.
		
		//echo $this->nombre_de_roues . ' roues. (constructeur) <br />';
		echo 'Identifiant N°' . self::$identitiant++ . ' - (constructeur) <br />';
	}

	// Destructeur
	function __destruct(){
		//echo $this->nombre_de_roues . ' roues. (déconstructeur) <br />';
		echo 'Identifiant N°' . self::$identitiant-- . ' - (déconstructeur) <br />';
	}

	// méthode
	function details(){
		echo $this->nombre_de_roues . ' roues. (méthode details()) <br />';
	}

}

echo '<h4>Constructeur</h4>';
$bmw = new Voiture();
$bmw_2 = new Voiture();
$bmw_3 = new Voiture();
echo '<br /><hr>';
echo '<p>On remarquera que le "Destructeur" s\'exécute tout à la fin. Vu que notre
dernier objet qui à été instancié, disposait de l\'identifiant : 69002.
Ainsi lors de la décrémentation grâce au "Destructeur", l\'identifiant 
commencera bien par : 69003.</p>';
echo '<h4>Méthode</h4>';
$bmw->details();
echo '<br /><hr>';
echo '<h4>Déconstructeur</h4>';
