<?php

// Crée deux variables $presentTime et $destinationTime, qui seront des objets DateTime. $presentTime devra correspondre à la date actuelle (le moment du départ) et $destinationTime la date et heure de destination, choisis celle que tu veux.

$presentTime = new DateTime();
$destinationTime = new DateTime('2049-10-21 12:29');

//Affiche ensuite ces deux dates en suivant exactement le format de l'image ci-dessous:

echo "Present Time: " . $presentTime->format('M d Y H:i a') . PHP_EOL;
echo "Destination Time: " . $destinationTime->format('M d Y H:i a') . PHP_EOL;

//Affiche ensuite la durée qui sépare ces deux dates et formate le résultat pour qu'il affiche le nombre d'années, mois, jours, heures et minutes entre les deux dates.

$delta = $presentTime->diff($destinationTime);

echo "Soit une durée de: " . $delta->format('%d jours %M mois %Y année(s) et  %H heures %I minutes %S secondes') . " qui sépare ces 2 dates." . PHP_EOL;
