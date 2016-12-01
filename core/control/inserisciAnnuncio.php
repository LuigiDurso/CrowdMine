<?php
/**
 * Created by PhpStorm.
 * User: Angelo
 * Date: 01/12/2016
 * Time: 18:37
 */
include_once MANAGER_DIR . 'AnnuncioManager.php';
include_once MODEL_DIR . 'Annuncio.php';

    $idUtente = $_POST['idUtente'];
    $data = $_POST['data'];
    $titolo = $_POST['titolo'];
    $descrizione = $_POST['descrizione'];
    $luogo = $_POST["luogo"];
    $stato = $_POST['stato'];
    $retribuzione = $_POST['retribuzione'];
    $tipologia = $_POST['tipologia'];
    $listaMicrocategorie = $_POST['microcategorie'];

    //$managerAnnuncio = new AnnuncioManager();
    //$managerAnnuncio->createAnnuncio($idUtente, $data, $titolo, $descrizione, $luogo, $stato, $retribuzione, $tipologia, $listaMicrocategorie);

?>