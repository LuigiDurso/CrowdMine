<?php

/** a) Controllo sugli accessi con un oggetto session (da discutere)
 *  b) metodi dei manager (da discutere)
 */
include_once MANAGER_DIR ."AnnuncioManager.php";

$utente = unserialize($_SESSION["user"]); //da rivedere
$permission = $utente->getTipologia();

if ($permission == "admin") {

    if ($SERVER["REQUEST_METHOD"] == "POST") {

        $adsManager = new AnnuncioManager();

        $adsNumber = $adsManager->getNumberAdsToday();

        var_dump($adsManager);

        header("Content-Type: application/json");
        echo json_encode($adsNumber);
    }
}