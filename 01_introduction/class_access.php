<?php 

class Voiture {

	// Ici nous définissons ce qu'on appel la visibilitée.
	// L'encapsulation correspond à la portée de la variable.
	// Dans notre cas :
	//
	// public -> sera accessible de partout même en dehors de la class Voiture
	// private -> sera accessible UNIQUEMENT dans la classe courante.
	// protected -> sera accessible dans la classe courante et dans ces enfants
	public $nombre_de_roues = 5;
	Private $nombre_de_portes = 5;
	Protected $nombre_de_places = 6;

	// méthode 'voiture_details()'
	function voiture_details(){
		echo $this->nombre_de_roues . ' roues.<br />';
		echo $this->nombre_de_portes . ' portes.<br />';
		echo $this->nombre_de_places . ' places.<br />';
	}

}

// Instanciation de l'objet Voiture
$bmw = new Voiture();


// CI DESSOUS SE TROUVE VOLONTAIREMENT UN CODE COMMENTER SUR L'AFFICHAGE
// DE CHAQUE PROPRIETEES AFIN DE VOIR SI ELLE SONT ACCESSIBLE OU NON EN DEHORS
// DE NOTRE CLASSE VOITURE. -- si vous voulez dé-commenter pour voir n'hésité pas.

echo 'Propriété public : ' . $bmw->nombre_de_roues . '<br />'; 	// Sera visible (public)
// echo 'Propriété private : ' . $bmw->nombre_de_portes; // provoquera une erreur Fatale (private)
// echo 'Propriété protected : ' . $bmw->nombre_de_places;	// provoquera une erreur Fatale (protected)

// Notre méthode ici affichera le contenu de chaque propriétées
$bmw->voiture_details();

