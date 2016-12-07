<?php
/** a) Controllo sugli accessi con un oggetto session (da discutere)
 *  b) metodi dei manager (da discutere)
 */
include_once MANAGER_DIR ."UtenteManager.php";

$utente = unserialize($_SESSION["user"]); //da rivedere
$permission = $utente->getTipologia();

if ($permission == "admin") {

    if ($SERVER["REQUEST_METHOD"] == "POST") {

        $jsonRequest = $_POST;

        $options = array();

        $options = json_encode($jsonRequest, true);

        $optionSelected = $options["option"];

        if ($optionSelected == "macrocategoria") {

            $utenteManager = new UtenteManager();

            $resultMacro = array();

            $resultMacro = $utenteManager->getTopRatedMacroCategorieUtenti();
            /**macro categorie più visitate dagli utenti
             * array->{macroCategorie:valore, macroCategorie:valore}*/

            var_dump($jsonRequest);
            var_dump($options);
            var_dump($optionSelected);
            var_dump($utenteManager);

            header("Content-Type:application/json");
            echo json_encode($resultMacro);


        } else if ($optionSelected == "microcategorie") {

            $macroCategoriaSelected = $options["macroCategoria"];

            $utenteManager = new UtenteManager();

            $resultMicro = array();

            $resultMicro = $utenteManager->getListTopRatedMicroCategorie($macroCategoriaSelected);


            var_dump($jsonRequest);
            var_dump($options);
            var_dump($optionSelected);
            var_dump($macroCategoriaSelected);
            var_dump($utenteManager);

            header("Content-Type:application/json");
            echo json_encode($resultMicro);
        }
    }
}