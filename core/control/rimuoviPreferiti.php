<?php


//include_once MANAGER_DIR . 'AnnuncioManager.php';

echo "Annuncio rimosso dai preferiti!";

$manager = new AnnuncioManager(); /* Declaration and initialization a manager variable */

$utente = unserialize($_SESSION['utente']); /* Declaration and initialization a user variable contain an unserialized version of a parameter who reference to user's info, given from session*/
$idUtente = $utente->getId(); /* Declaration and initialization a user variable contain the user id */
$idAnnuncio = unserialize($_SESSION['idAnnuncio']); /* Declaration and initialization a user variable contain an unserialized version of a parameter who reference to annuncio's info, given from session */

$manager->removeFromFavorites($idAnnuncio, $idUtente); /* Manager calls the function which remove to user's favorites'list, the annuncio with relative id */



?>