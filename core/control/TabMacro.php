<?php
/** a)Aggiungere MANAGER_DIR
 *  b) Controllo sugli accessi con un oggetto session (da discutere)
 *  c) metodi dei manager (da discutere)
 */

if($SERVER["REQUEST_METHOD"]=="POST"){

    $macroCategoriaManager = new MacroCategoriaManager();

    $macroList = array();

    $macroList = $macroCategoriaManager->getMacroCategorie(); //array di macro categorie

    header("Content-Type: application/json");
    echo $adsNumber;
}