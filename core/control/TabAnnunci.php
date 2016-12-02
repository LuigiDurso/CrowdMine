<?php
    if ($SERVER["REQUEST_METHOD"]=="POST" && $_POST["microInfoDate"] == "microInfoDate"){
        /**decodifico le informazioni da JSON*/
        $jsonRequest = $_POST;

        $fromdatemicro = new DateTime(); /**DataTime da valutare durenate l'implementazione*/
        $atdatemicro = new DateTime();

        $fromdatemicro = json_decode($jsonRequest);
        $atdatemicro = json_decode($jsonRequest);

        $fooMicro = new Foo();
        /**Esempio al posto di foo va il model che chiama un metodo che prende in input
         * le due date e restituisce il nome della micro e un insieme di interi */

        var_dump($fromdatemicro);
        var_dump($atdatemicro);
        var_dump($jsonRequest);

        /** alla chiamata AJAX viene risposto con un oggetto contenete il nome della micro categoria
         * e i relativi valori. Sull'oggetto verrà effettuato il parsing con JSON.*/

        header("Content-Type: application/json");
        echo json_encode($fooMicro);

    }elseif($SERVER["REQUEST_METHOD"]=="POST" && $_POST["macroInfoDate"]=="macroInfoDate"){
        $jsonRequest = $_POST;

        $fromdatemacro = new DateTime();
        $atdatemacro = new DateTime();

        $fromdatemacro = json_decode($jsonRequest);
        $atdatemacro = json_decode($jsonRequest);

        $fooMacro = new Foo();
        /**Esempio al posto di foo va il model che chiama un metodo che prende in input
         * le due date e restituisce il nome della macro e  l'insieme di interi*/

        var_dump($fromdatemacro);
        var_dump($atdatemacro);
        var_dump($jsonRequest);

        /** alla chiamata AJAX viene risposto con un oggetto contenete il nome della macro categoria
         * e i relativi valori. Sull'oggetto verrà effettuato il parsing con JSON.*/

        header("Content-Type: application/json");
        echo json_encode($fooMacro);

    }
?>