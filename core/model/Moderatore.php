<?php

/**
 * Created by PhpStorm.
 * User: Angelo
 * Date: 30/11/2016
 * Time: 21:09
 */
class Moderatore extends Utente
{

    private $listaUtentiSegnalati;
    /**
     * Moderatore constructor.
     */
    public function __construct($id, $nome, $cognome, $telefono, $dataNascita, $citta, $email, $password, $stato, $ruolo, $listaUtenteBloccati, $listaAnnunciPreferiti, $listaNotifiche, $listaMicrocategorie,$listaUtentiSegnalati)
    {
        parent::__construct($id, $nome, $cognome, $telefono, $dataNascita, $citta, $email, $password, $stato, $ruolo, $listaUtenteBloccati, $listaAnnunciPreferiti, $listaNotifiche, $listaMicrocategorie);
        $this->$listaUtentiSegnalati = $listaUtentiSegnalati;
    }

    /**
     * @return mixed
     */
    public function getListaUtentiSegnalati()
    {
        return $this->listaUtentiSegnalati;
    }

    /**
     * @param mixed $listaUtentiSegnalati
     */
    public function setListaUtentiSegnalati($listaUtentiSegnalati)
    {
        $this->listaUtentiSegnalati = $listaUtentiSegnalati;
    }

}