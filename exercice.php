<?php

//Niveau 2 Exercice 1

$cuissons = ["à point", "saignant", "bleu", "bien cuit"]; 
$viandes = ["poulet", "boeuf", "mouton"];
//Tableau vide qui va contenir le tout
$plats = [];

foreach($cuissons as $cuisson) {
    foreach ($viandes as $viande){
    	// Viande et Cuisson dans le tableau Plat
        array_push ($plats, $viande. ""." "."".$cuisson."\n");
    }
}
foreach ($plats as $plat){
    echo $plat."\n";
}
?>



<?php
//Niveau 2 Exercice 2

//Des espaces pour 11 caractères
$genres = "horreur    fantastique action      western     thriller    comedie     drame  romance   historique ";

$array1=str_split($genres,11);
print_r ($array1);

?>

<?php
// Niveau 2 Exercice 3
$fruits = array ("orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas");

//On fait ressortir les deux derniers
print_r (array_slice ($fruits, -2));
?>



<?php
// Niveau 2 Exercice 4
$fruits= array ("Harry", "Hilary", "Harrington", "Hagrid", "Holmes");
// On selectionne l'element
$element = "Harrington";
//On supprime l'élément en cherchant l'élément dans le tableau
unset($fruits[array_search($element, $fruits)]);
print_r ($fruits);
?>