<?php
if($SERVER["REQUEST_METHOD"]=="POST"){

        /**Creare un oggetto Manager per gestire le query sul db
         * Restituisce un array contente degli oggetti macro categorie composte da un nome ed un valore*/
        header("Content-Type: application/json");
        $fooStatisticheMacro = new Foo();
        echo json_encode($fooStatisticheMacro);
}
?>