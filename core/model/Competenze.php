<?php


class Competenze
{
    private $studente;
    private $microcategorie;

    /**
     * Competenze constructor.
     * @param $studente
     * @param $microcategorie
     */
    public function __construct($studente, $microcategorie)
    {
        $this->studente = $studente;
        $this->microcategorie = $microcategorie;
    }

    /**
     * @return mixed
     */
    public function getStudente()
    {
        return $this->studente;
    }

    /**
     * @param mixed $studente
     */
    public function setStudente($studente)
    {
        $this->studente = $studente;
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