<?php

include_once MODEL_DIR . 'Macrocategoria.php';
include_once MODEL_DIR . 'Microcategoria.php';
/**
 * Created by PhpStorm.
 * User: Andrea Sarto
 * Date: 29/11/2016
 * Time: 00.15
 */
class MicrocategoriaManager extends Controller
{

    /**
     * MicrocategoriaManager constructor.
     */
    public function __construct()
    {

    }
    /**
     * Add a new persistent Microcategoria
     *
     * @param $id
     * @param $nome
     * @return Microcategoria
     */
    public function createMicrocategoria($id, $nome){
        return new Microcategoria($id, $nome);
    }

    /**
     * Add the Microcategoria into the dataBase
     *
     * @param Microcategoria $microcategoria
     * @param Macrocategoria $macrocategoria
     */
    public function addMicrocategoria($microcategoria, $macrocategoria){

    }


    /**
     * Get the list of all Microcategoria into the dataBase
     *
     * @return Microcategoria[] A list of Microcategoria in dataBase
     */
    public function getListaMicrocategoria(){
        return [];
    }

    /**
     * Delete a Microcategoria from dataBase
     *
     * @param Microcategoria $microcategoria
     */
    public function deleteMicrocategoria($microcategoria){

    }

    /**
     * Edit an exist Microcategoria
     *
     * @param Microcategoria $microcategoria
     */
    public function editMicrocategoria($microcategoria){

    }



}