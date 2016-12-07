<?php


//include MANAGER_DIR . 'AnnuncioManager.php';

echo "Annuncio aggiunto ai preferiti!";

$manager = new AnnuncioManager(); /* Declaration and initialization a manager variable */

$utente = unserialize($_SESSION['utente']); /* Declaration and initialization a user variable contain an unserialized version of a parameter who reference to user's info, given from session*/
$idUtente = $utente->getId(); /* Declaration and initialization a user variable contain the user id */
$idAnnuncio = unserialize($_SESSION['idAnnuncio']); /* Declaration and initialization a user variable contain an unserialized version of a parameter who reference to annuncio's info, given from session */
//$data = ?;
//$manager->addToFavorites($idAnnuncio, $idUtente, $data); /* Manager calls the function which add to user's favorites'list, the annuncio with relative id */



?>