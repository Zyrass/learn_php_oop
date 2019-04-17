<?php 

class Voiture {

	// méthode de la classe Voiture
	function method_exemple_one(){
		// Le code de la méthode : method_exemple_one() ici...
	}
	function method_exemple_two(){
		// Le code de la méthode : method_exemple_two() ici...
	}

}

// Permet de savoir quelle 'méthode(s)' existe dans la classe 'Voiture'
$the_methods = get_class_methods('Voiture');

foreach ($the_methods as  $method) {
	echo $method . "<br>";
}