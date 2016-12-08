<?php
/**
 * Created by PhpStorm.
 * User: Angelo
 * Date: 01/12/2016
 * Time: 18:37
 */
//include_once MANAGER_DIR . 'AnnuncioManager.php';
include_once CONTROL_DIR . "ControlUtils.php";
include_once EXCEPTION_DIR . "IllegalArgumentException.php";

if($_SERVER["REQUEST_METHOD"]=="POST") {

    $titolo = null;
    $descrizione = null;
    $luogo = null;
    $retribuzione = null;
    $tipologia = null;
    $listaMicrocategorie = null;
    $stato = "revisione";

    //$utente = unserialize($_SESSION['utente']);
    //$idUtente = $utente->getId();
    if(isset($_POST['titolo'])){
        $titolo = $_POST['titolo'];
    } else {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Campo titolo annuncio non settato";
        header("Location:" . DOMINIO_SITO . "/inserisciAnnuncio");
        throw new IllegalArgumentException("Campo titolo annuncio non settato");
    }

    if (empty($titolo) || !preg_match(Patterns::$NAME_GENERIC, $titolo)) {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Campo titolo annuncio contiene caratteri speciali o è vuoto";
        header("Location:" . DOMINIO_SITO . "/inserisciAnnuncio");
        throw new IllegalArgumentException("Campo titolo non corretto");
    }

    if(isset($_POST['descrizione'])){
        $descrizione = $_POST['descrizione'];
    } else {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Campo descrizione annuncio non settato";
        header("Location:" . DOMINIO_SITO . "/inserisciAnnuncio");
        throw new IllegalArgumentException("Campo descrizione annuncio non settato");
    }

    if (empty($descrizione) || !preg_match(Patterns::$NAME_GENERIC, $descrizione)) {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Campo descrizione annuncio contiene caratteri speciali o è vuoto";
        header("Location:" . DOMINIO_SITO . "/inserisciAnnuncio");
        throw new IllegalArgumentException("Campo descrizione non corretto");
    }

    if(isset($_POST['luogo'])){
        $luogo = $_POST['luogo'];
    } else {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Campo luogo annuncio non settato";
        header("Location:" . DOMINIO_SITO . "/inserisciAnnuncio");
        throw new IllegalArgumentException("Campo luogo annuncio non settato");
    }

    if (empty($luogo) || !preg_match(Patterns::$NAME_GENERIC, $luogo)) {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Campo luogo annuncio contiene caratteri speciali o è vuoto";
        header("Location:" . DOMINIO_SITO . "/inserisciAnnuncio");
        throw new IllegalArgumentException("Campo luogo non corretto");
    }

    if(isset($_POST['retribuzione'])){
        $retribuzione = $_POST['retribuzione'];
    } else {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Campo retribuzione annuncio non settato";
        header("Location:" . DOMINIO_SITO . "/inserisciAnnuncio");
        throw new IllegalArgumentException("Campo retribuzione annuncio non settato");
    }

    if (empty($retribuzione) || !preg_match(Patterns::$REMUNERATION, $retribuzione)) {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Campo retribuzione annuncio contiene caratteri di testo o è vuoto";
        header("Location:" . DOMINIO_SITO . "/inserisciAnnuncio");
        throw new IllegalArgumentException("Campo retribuzione non corretto");
    }

    if(isset($_POST['tipologia'])){
        $tipologia = $_POST['tipologia'];
    } else {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Campo tipologia annuncio non settato";
        header("Location:" . DOMINIO_SITO . "/inserisciAnnuncio");
        throw new IllegalArgumentException("Campo tipologia annuncio non settato");
    }

    if (empty($tipologia) || !preg_match(Patterns::$NAME_GENERIC, $tipologia)) {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Campo tipologia annuncio contiene caratteri speciali o è vuoto";
        header("Location:" . DOMINIO_SITO . "/inserisciAnnuncio");
        throw new IllegalArgumentException("Campo tipologia non corretto");
    }

    if(isset($_POST['microcategorie'])){
        $listaMicrocategorie = $_POST['microcategorie'];
    } else {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Campo microcategorie annuncio non settato";
        header("Location:" . DOMINIO_SITO . "/inserisciAnnuncio");
        throw new IllegalArgumentException("Campo microcategorie annuncio non settato");
    }

    if (empty($listaMicrocategorie)) {
        $_SESSION['toast-type'] = "error";
        $_SESSION['toast-message'] = "Campo listaMicrocategorie annuncio è vuoto";
        header("Location:" . DOMINIO_SITO . "/inserisciAnnuncio");
        throw new IllegalArgumentException("Campo listaMicrocategorie non corretto");
    }



    //$macrocategoria = ?? l'utente quando inserisce un'annuncio, seleziona prima la macro, e poi gli vengono visualizzate
    //le micro associate, cosi lui può scegliersi direttamente le micro, giusto?


    $dataPubblicazione = new DateTime();
    $data = $dataPubblicazione->format("Y-m-d");
    //$managerAnnuncio = new AnnuncioManager();
    //$managerAnnuncio->createAnnuncio($idUtente, $data, $titolo, $descrizione, $luogo, $stato, $retribuzione, $tipologia, $listaMicrocategorie);
    echo $titolo . "<br>";
    echo $descrizione . "<br>";
    echo $luogo . "<br>";
    echo $retribuzione . "<br>";
    echo $tipologia . "<br>";
    echo $listaMicrocategorie . "<br>";
    echo $data . "<br>";

    //header("Location:" . DOMINIO_SITO . "/"."inserisciAnnuncio");
}
?>