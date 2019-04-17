<?php 

class Voiture {

	// Propriété
	var $roues = 5;

	function presentation(){
		return "hello";
	}

}

// La Class Camion hérite(extends) de la Class Voiture 
class Camion extends Voiture {
	// Tout le code de voiture est disponible ici...
	// Mais on peut ici ajouter du code spécifique à la classe Camion
}

// Affichage ici des propriétés éditer dans la Classe Voiture et utiliser sur la Classe Camion.
$clio = new Voiture();
$iveco = new Camion();
echo "Mon Camion dispose de " . $iveco->roues . " roues... <br />";







 ?>
