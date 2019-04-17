<?php 

class Voiture {

	// Définition ici de deux propriétées statique.
	static $nombre_de_roues = 5;
	static $nombre_de_portes = 5;

	// Définition d'une méthode statique avec le mot clé 'static' devant la function.
	static function voiture_details(){

		// Nous utilisons le nom de la classe suivi de 
		// l'opérateur de résolution de portée '::'
		// et enfin le nom de la propriétée PRECEDE d'un $.
		echo Voiture::$nombre_de_roues . ' roues et ';
		echo Voiture::$nombre_de_portes . ' portes.<br />';
	}

}

// Les propriétés statique ne change pas mais surtout elles n'ont pas besoin
// d'être instancier.
echo Voiture::$nombre_de_portes . ' portes. <br />';

// Nous pouvons définir la même syntaxe afin de récupérer une méthode statique.
// c'est exactement le même principe que précédemment.
Voiture::voiture_details();
