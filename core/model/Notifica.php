<?php

/**
 * Created by PhpStorm.
 * User: Angelo
 * Date: 30/11/2016
 * Time: 20:40
 */
class Notifica
{
    private $id;
    private $data;
    private $tipo;
    private $info;
    private $letto;

    /**
     * Notifica constructor.
     * @param $id
     * @param $data
     * @param $tipo
     * @param $info
     * @param $letto
     */
    public function __construct($id, $data, $tipo, $info, $letto)
    {
        $this->id = $id;
        $this->data = $data;
        $this->tipo = $tipo;
        $this->info = $info;
        $this->letto = $letto;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @return mixed
     */
    public function getLetto()
    {
        return $this->letto;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @param mixed $info
     */
    public function setInfo($info)
    {
        $this->info = $info;
    }

    /**
     * @param mixed $letto
     */
    public function setLetto($letto)
    {
        $this->letto = $letto;
    }

}