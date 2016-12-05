<?php

include_once MANAGER_DIR . 'AnnuncioManager.php';

$manager = new AnnuncioManager();
$utente = unserialize($_SESSION['utente']);
$idUtente = $utente->getId();

/* VERIFICARE TIPO HOMEPAGE (Utente loggato/non)

if (!$idUtente) {
    $manager->getAnnunciHomePage();
} else {
    $manager->getAnnunciHomePage();
}

*/

