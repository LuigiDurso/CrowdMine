<?php

include_once MANAGER_DIR . 'AnnuncioManager.php';

$manager = new AnnuncioManager(); /* Declaration and initialization a manager variable */

$utente = unserialize($_SESSION['utente']); /* Declaration and initialization a user variable contain an unserialized version of a parameter who reference to user's info, given from session*/
$idUtente = $utente->getId(); /* Declaration and initialization a user variable contain the user id */
$annunci[] = $manager->searchAnnunciUtente($idUtente); /* Declaration and initialization an annunci array contain an array of annunci selected with the user's id, given from input in a relative function called from the manager */
?>


