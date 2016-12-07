<?php

include_once MANAGER_DIR . 'AnnuncioManager.php';

$manager = new AnnuncioManager();
$utente = unserialize($_SESSION['utente']);
$idUtente = $utente->getId();

if (!$idUtente) {
    $manager->getAnnunciHomePage(null);
} else {
    $manager->getAnnunciHomePage($idUtente); /* Funzione da definire all'interno dei manager annunci*/
}



