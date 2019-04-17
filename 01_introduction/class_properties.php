<?php 

class Voiture {

	// Définition des propriétées
	var $nombre_de_roues = 4;
	var $nombre_de_portes = 4;

	function presentation(){
		echo "Salut cher étudiant vous avez une belle voiture. <br />";
	}
	function voiture_details(){
		return "Cette voiture dispose de " . $this->nombre_de_roues . "  roues.";
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

// Modification et affichage directement de la variable nombre de roues sur 
// l'objet BMW de la classe Voiture.
echo $bmw->nombre_de_roues = 10;
echo "<br>";

// Même chose que précédemment sans pour autant modifier cette valeur ainsi donc 
// l'objet MERCEDES aura bien 4 roues qui ont belle et bien été définit sur la classe Voiture.
echo $mercedes->nombre_de_roues . "<br>";

// Ici nous utilisons un echo sur la méthode 'voiture_details()' afin d'afficher le retour de cet méthode.
echo $mercedes->voiture_details();
