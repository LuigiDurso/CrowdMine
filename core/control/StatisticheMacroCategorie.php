<?php

/** a)Aggiungere MANAGER_DIR
 *  b) Controllo sugli accessi con un oggetto session (da discutere)
 *  c) metodi dei manager (da discutere)
 */

if($SERVER["REQUEST_METHOD"]=="POST"){

    $macroCategoriaManager = new MacroCategoriaManager();

    $result = array();
    $result = $macroCategoriaManager->getMacroCategorieValues(); //{macrocategoria:valore}

    var_dump($macroCategoriaManager);

    header("Content-Type: application/json");
    echo json_encode($result);
}
?>