<?php 

class Voiture {

	// Nous encapsulons notre propriété en privé afin quelle ne soit accéssible
	// que dans la classe Voiture.
	Private $nombre_de_porte = 4;

	// Les Getters nous permettent de récupérer une propriété
	function get_nombre_de_porte(){
		return $this->nombre_de_porte;
	}

	// Les Setters nous permettent d'éditer une propriétée.
	// Ici en paramètre je défini un paramètre qui permettra d'éditer notre propriété
	function set_nombre_de_porte(int $nombre_de_porte){
		$this->nombre_de_porte = $nombre_de_porte;
	}

}

// Instanciation de la classe Voiture
$bmw = new Voiture();

// J'édite la propriétée '_nombre_de_porte' via la méthode 'set_nombre_de_porte()'
$bmw->set_nombre_de_porte(6);
echo 'Ma BMW dispose de <mark>' . $bmw->get_nombre_de_porte() . '</mark> portes.<br />';

// J'édite à nouveau le nombre de porte afin de voir 
// les changements directement à l'écran.
$bmw->set_nombre_de_porte(5);
echo 'Oups désolé, il y a eu une erreur en interne... Le nombre de porte de ma BMW correspond bien à <mark>' . $bmw->get_nombre_de_porte() . '</mark> portes que vous trouverez sur le flayer que vous avez entre vos mains.';
