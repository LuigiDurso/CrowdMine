<?php
    /** a)Aggiungere MANAGER_DIR
     *  b) Controllo sugli accessi con un oggetto session (da discutere)
     *  c) metodi dei manager (da discutere)
     */
    if ($SERVER["REQUEST_METHOD"]=="POST" && $_POST["microInfoDate"] == "microInfoDate"){
        $jsonRequest = $_POST;

        $datesofmicro = array();

        $dateofmicro = json_decode($jsonRequest,true);

        $fromdatemicro = new DateTime($dateofmicro["fromdatemicro"]);
        $atdatemicro = new DateTime($datesofmicro["atdatemicro"]);

        $resultMarco = array();
        $annuncioManager = new AnnuncioManager();
        $result = $annuncioManager->getListAnnunci("MICRO_CATEGORIA",$fromdatemicro, $atdatemicro); //da rivedere

        var_dump($fromdatemicro);
        var_dump($atdatemicro);
        var_dump($jsonRequest);
        var_dump($annuncioManager);


        header("Content-Type: application/json");
        echo json_encode($resultMacro);

    }elseif($SERVER["REQUEST_METHOD"]=="POST" && $_POST["macroInfoDate"]=="macroInfoDate"){
        $jsonRequest = $_POST;

        $datesofmacro = array();

        $dateofmacro = json_decode($jsonRequest,true);

        $fromdatemacro = new DateTime($dateofmacro["fromdatemacro"]);
        $atdatemacro = new DateTime($dateofmacro["atdatemacro"]);

        $annuncioManager = new AnnuncioManager();
        $resultMicro = array();
        $resultMicro = $annuncioManager->getListAnnunci("MACRO_CATEOGORIA",$fromdatemicro, $atdatemicro); // da rivedere

        var_dump($fromdatemacro);
        var_dump($atdatemacro);
        var_dump($jsonRequest);
        var_dump($annuncioManager);

        header("Content-Type: application/json");
        echo json_encode($resultMicro);

    }else{

        $jsonRequest = $_POST;

        $option = json_decode($jsonRequest);

        if($option =="selectMicro") {

            $microCategoriaManager = new MicrocategoriaManager();

            $listMicroOptions = $microCategoriaManager->getListaMicrocategoria();
            var_dump($jsonRequest);
            var_dump($option);
            var_dump($microCategoriaManager);

            header("Content-Type: application/json");
            echo json_encode($listMicroOptions);

        }else if($option=="selectMacro"){

            $macroCategoriaManager = new MacroCategoriaManager();
            $listMacroOptions = $macroCategoriaManager->getListMacroCategoria();

            var_dump($jsonRequest);
            var_dump($option);
            var_dump($macroCategoriaManager);

            header("Content-Type: application/json");
            echo json_decode($listMacroOptions);
        }


    }