<?php

/**
 * Created by PhpStorm.
 * User: Lino
 * Date: 28/11/2016
 * Time: 09:33
 */
class Riferito
{
    private $annuncio;
    private $microcategorie;

    /**
     * Riferito constructor.
     * @param $annuncio
     * @param $microcategorie
     */
    public function __construct($annuncio, $microcategorie)
    {
        $this->annuncio = $annuncio;
        $this->microcategorie = $microcategorie;
    }

    /**
     * @return mixed
     */
    public function getAnnuncio()
    {
        return $this->annuncio;
    }

    /**
     * @param mixed $annuncio
     */
    public function setAnnuncio($annuncio)
    {
        $this->annuncio = $annuncio;
    }

    /**
     * @return mixed
     */
    public function getMicrocategorie()
    {
        return $this->microcategorie;
    }

    /**
     * @param mixed $microcategorie
     */
    public function setMicrocategorie($microcategorie)
    {
        $this->microcategorie = $microcategorie;
    }

}