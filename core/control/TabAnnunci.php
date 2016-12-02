<?php
    if ($SERVER["REQUEST_METHOD"]=="POST" && $_POST["microInfoDate"] == "microInfoDate"){
        $jsonRequest = $_POST;


        /**è necessario creare un array*/
        $datesofmicro = array();

        /**resituisce un array associativo*/
        $dateofmicro = json_decode($jsonRequest,true);

        /**Le date sono delle stringhe, basta creare due oggetti data*/
        $fromdatemicro = new DateTime($dateofmicro[0]);
        $atdatemicro = new DateTime($datesofmicro[1]);

        $fooMicro = new Foo($fromdatemicro, $atdatemicro);

        /**Esempio al posto di Foo va il manager che chiama un metodo che prende in input
         * le due date e restituisce il nome della micro, le date e un insieme di interi */

        var_dump($fromdatemicro);
        var_dump($atdatemicro);
        var_dump($jsonRequest);

        /** alla chiamata AJAX viene risposto con un oggetto contenete il nome della micro categoria
         * e i relativi valori. Sull'oggetto verrà effettuato il parsing con JSON.*/

        header("Content-Type: application/json");
        echo json_encode($fooMicro);

    }elseif($SERVER["REQUEST_METHOD"]=="POST" && $_POST["macroInfoDate"]=="macroInfoDate"){
        $jsonRequest = $_POST;

        /**è necessario creare un array */
        $datesofmacro = array();

        /**resituisce un array associativo*/
        $dateofmacro = json_decode($jsonRequest,true);

        /**Le date sono delle stringhe, basta creare due oggetti data*/
        $fromdatemacro = new DateTime($dateofmacro[0]);
        $atdatemacro = new DateTime($dateofmacro[1]);

        $fooMacro = new Foo($fromdatemicro, $atdatemicro);
        /**Esempio al posto di foo va il manager che chiama un metodo che prende in input
         * le due date e restituisce il nome della macro, le date e l'insieme di interi*/

        var_dump($fromdatemacro);
        var_dump($atdatemacro);
        var_dump($jsonRequest);

        /** alla chiamata AJAX viene risposto con un oggetto contenete il nome della macro categoria
         * e i relativi valori. Sull'oggetto verrà effettuato il parsing con JSON.*/

        header("Content-Type: application/json");
        echo json_encode($fooMacro);

    }else{
        /*gestione combobox*/
        $jsonRequest = $_POST;

        $option = json_decode($jsonRequest);

        if($option =="selectMicro") {

            /**Il manager di Micro Categoria restituisce tutte le micro categorie*/

            $listMicroOptions = new Foo();
            var_dump($jsonRequest);
            var_dump($option);
            header("Content-Type: application/json");
            echo json_encode($listMicroOptions);

        }else if($option=="selectMacro"){

            /**Il manager di Macro Categoria restituisce tutte le micro categorie*/

            $listMacroOptions = new Foo();
            var_dump($jsonRequest);
            var_dump($option);
            header("Content-Type: application/json");
            echo json_decode($listMacroOptions);
        }


    }
?>