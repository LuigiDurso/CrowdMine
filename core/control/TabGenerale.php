<?php

if($SERVER["REQUEST_METHOD"]=="POST"){
    /**Creare un oggetto Manager per gestire il db
    *Resituisce il numero degli annunci calcolato dal model*/
    header("Content-Type: application/json");
    echo $FooNumberoAnnunci;
}

?>