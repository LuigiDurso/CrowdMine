<?php


include_once MANAGER_DIR . 'AnnuncioManager.php';

$manager = new AnnuncioManager();

$utente = unserialize($_SESSION['utente']);
$idUtente = $utente->getId();
$idAnnuncio = null; //in qualche modo dovremmo prenderci l'id dell'annuncio, oggi sabato 3 dicembre alle ore 18:04 non so come fare <3

$manager->removeFromFavorites($idAnnuncio, $idUtente);



?>