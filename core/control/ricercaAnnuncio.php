<?php
include_once MANAGER_DIR . 'AnnuncioManager.php';
include_once CONTROL_DIR . "ControlUtils.php";
include_once EXCEPTION_DIR . "IllegalArgumentException.php";

if($_SERVER["REQUEST_METHOD"]=="POST") {

    $titolo = null;
    $data = null;
    $luogo = null;
    $idUtente = "1";
    $tipologia = null;
    $macro = null;
    $micro = null;

    $filters = array();

    if(isset($_POST['titolo'])){
        $titolo = $_POST['titolo'];
    } else {
        $titolo = null;
    }

    array_push($filters, $titolo);


    if(isset($_POST['data'])){
        $data = $_POST['data'];
    } else {
        $data = null;
    }

    array_push($filters, $data);


    if(isset($_POST['luogo'])){
        $luogo = $_POST['luogo'];
    } else {
        $luogo = null;
    }

    array_push($filters, $luogo);

    if(isset($_POST['tipologia'])){
        $tipologia = $_POST['tipologia'];
    } else {
        $tipologia = null;
    }

    array_push($filters, $tipologia);

    if(isset($_POST['macrocategorie'])){
        $macro = $_POST['macrocategorie'];
    } else {
        $macro = null;
    }

    array_push($filters, $macro);

    if(isset($_POST['microcategorie'])){
        $micro = $_POST['microcategorie'];
    } else {
        $micro = null;
    }

    array_push($filters, $micro);

    array_push($filters, $idUtente);


    for ($i = 0; $i < 5; $i++) {
        echo $filters[$i];
    }

    $managerAnnuncio = new AnnuncioManager();
    if($managerAnnuncio->searchAnnuncio($filters)) {
        $annunci = array();
        array_push($annunci, $managerAnnuncio->searchAnnuncio($filters));
    } else {
        echo "no";
    }



}








?>