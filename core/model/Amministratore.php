<?php

/**
 * Created by PhpStorm.
 * User: Angelo
 * Date: 30/11/2016
 * Time: 21:09
 */
class Amministratore extends Moderatore
{

    /**
     * Amministratore constructor.
     */
    public function __construct($id, $nome, $cognome, $telefono, $dataNascita, $citta, $email, $password, $stato, $ruolo, $listaUtenteBloccati, $listaAnnunciPreferiti, $listaNotifiche, $listaMicrocategorie,$listaUtentiSegnalati)
    {
        parent::__construct($id, $nome, $cognome, $telefono, $dataNascita, $citta, $email, $password, $stato, $ruolo, $listaUtenteBloccati, $listaAnnunciPreferiti, $listaNotifiche, $listaMicrocategorie,$listaUtentiSegnalati);
    }
}