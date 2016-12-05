<?php

include_once MANAGER_DIR . 'AnnuncioManager.php';

$manager = new AnnuncioManager();

$utente = unserialize($_SESSION['utente']);
$idUtente = $utente->getId();
$annunci[] = $manager->searchAnnunciUtente($idUtente);
//visualizzaAnnunci($annunci[]);

?>


