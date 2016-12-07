<?php

/** a) Controllo sugli accessi con un oggetto session (da discutere)
 *  b) metodi dei manager (da discutere)
 */

include_once MANAGER_DIR . "AnnuncioManager.php";


$utente = unserialize($_SESSION["user"]); //da rivedere
$permission = $utente->getTipologia();

if ($permission == "admin") {

    if ($SERVER["REQUEST_METHOD"] == "POST") {

        $macroCategoriaManager = new AnnuncioManager();

        $result = array();
        $result = $macroCategoriaManager->getListMacroCategorie();

        /**Il nome potrebbe variare
         * {macrocategoria:valore} già ordinato*/

        var_dump($macroCategoriaManager);

        header("Content-Type: application/json");
        echo json_encode($result);
    }
}