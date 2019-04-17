<?php 

class Voiture {

	// Méthode presentation()
	function presentation(){
		echo "Salut cher étudiant vous avez une belle voiture. <br />";
	}

}

// Ici à chaque fois qu'on appel 'new Voiture()', 
// nous fabriquons une instanciation de notre objet voiture.
// Chaque voiture est différente malgré que pour le moment il font la même chose.
$bmw = new Voiture();
$mercedes = new Voiture();

// Utilisation de la méthode 'presentation()' de la Classe Voiture
// Petite précision, il n'est pas ici nécessaire d'utiliser 
// l'instruction echo vue qu'elle est utilisée dans la méthode 'presentation()'.
$bmw->presentation();
$mercedes->presentation();
