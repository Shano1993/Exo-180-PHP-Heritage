<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

require 'classes/Habitation.php';
require 'classes/Maison.php';
require 'classes/Appartement.php';

$maison1 = new Maison('Belgique', 'Macon', 6592, 5, 10, true, 2, true);
echo "Maison 1 <br>";
echo "Pays: " . $maison1->pays . "<br>";
echo "Ville: " . $maison1->ville . "<br>";
echo "Code postal: " . $maison1->codePostal . "<br>";
echo "Chambres: " . $maison1->chambres . "<br>";
echo "Pièces: " . $maison1->pieces . "<br>";
echo "Jardin: " . $maison1->jardin . "<br>";
echo "Etages: " . $maison1->etages . "<br>";
echo "Garage: " . $maison1->garage . "<br><br>";

$maison2 = new Maison('France', 'Paris', 75125, 2, 8, false, 1, false);
echo "Maison 2 <br>";
echo "Pays: " . $maison2->pays . "<br>";
echo "Ville: " . $maison2->ville . "<br>";
echo "Code postal: " . $maison2->codePostal . "<br>";
echo "Chambres: " . $maison2->chambres . "<br>";
echo "Pièces: " . $maison2->pieces . "<br>";
echo "Jardin: " . $maison2->jardin . "<br>";
echo "Etages: " . $maison2->etages . "<br>";
echo "Garage: " . $maison2->garage . "<br><br>";

$appartement1 = new Appartement('Belgique', 'Bruxelles', 8000, 1, 4, false);
echo "Appartement 1 <br>";
echo "Pays: " . $appartement1->pays . "<br>";
echo "Ville: " . $appartement1->ville . "<br>";
echo "Code postal: " . $appartement1->codePostal . "<br>";
echo "Chambres: " . $appartement1->chambres . "<br>";
echo "Pièces: " . $appartement1->pieces . "<br>";
echo "Garage: " . $appartement1->garage . "<br>";

$appartement1->setPays('Belgique');
$appartement1->setVille('Bruxelles');
$appartement1->setCodePostal(8000);
$appartement1->setChambres(1);
$appartement1->setPieces(4);
$appartement1->setGarage(false);

