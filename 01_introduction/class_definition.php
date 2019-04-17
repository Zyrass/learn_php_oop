<?php 

class Voiture {
	// Le code de la classe Voiture à insérer ici..
}

// Permet de savoir quelle classe existe nativement à PHP...
$my_classes = get_declared_classes();

foreach ($my_classes as $class) {
	echo $class . "<br />";
}
