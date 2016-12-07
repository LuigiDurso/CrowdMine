<?php
/**
 * Created by PhpStorm.
 * User: Angelo
 * Date: 01/12/2016
 * Time: 18:37
 */
//include_once MANAGER_DIR . 'AnnuncioManager.php';

    //$utente = unserialize($_SESSION['utente']);
    //$idUtente = $utente->getId();
    $titolo = strip_tags(htmlspecialchars(addslashes($_POST['titolo'])));
    $descrizione = strip_tags(htmlspecialchars(addslashes($_POST['descrizione'])));
    $luogo = strip_tags(htmlspecialchars(addslashes($_POST['luogo'])));
    $retribuzione = strip_tags(htmlspecialchars(addslashes($_POST['retribuzione'])));
    $tipologia = strip_tags(htmlspecialchars(addslashes($_POST['tipologia'])));
    $listaMicrocategorie = strip_tags(htmlspecialchars(addslashes($_POST['microcategorie'])));
    //$macrocategoria = ?? l'utente quando inserisce un'annuncio, seleziona prima la macro, e poi gli vengono visualizzate
    //le micro associate, cosi lui può scegliersi direttamente le micro, giusto?

    $stato = "revisione";
    $dataPubblicazione = new DateTime();
    $data = $dataPubblicazione->format("Y-m-d");
    //$managerAnnuncio = new AnnuncioManager();
    //$managerAnnuncio->createAnnuncio($idUtente, $data, $titolo, $descrizione, $luogo, $stato, $retribuzione, $tipologia, $listaMicrocategorie);
    echo $titolo."<br>";
    echo $descrizione."<br>";
    echo $luogo."<br>";
    echo $retribuzione."<br>";
    echo $tipologia."<br>";
    echo $listaMicrocategorie."<br>";
    echo $data."<br>";

    //header("Location:" . DOMINIO_SITO . "/"."inserisciAnnuncio");
?>