<?php

/**
 * Created by PhpStorm.
 * User: LongSky
 * Date: 01/12/2016
 * Time: 16:35
 */

include_once MODEL_DIR . 'MacroCategoria.php';

/**
 * Class MacroCategoriaManager
 * This Class provides the business logic for the MacroCategoria Management and methods for database access.
 */

class MacroCategoriaManager extends Manager
{

    public function __construct()
    {
    }

    /**
     * create a new persistent macroCategoria
     *
     * @param $id
     * @param $nome
     * @return MacroCategoria
     */
    public function createMacrocategoria($id, $nome){
        return new MacroCategoria($id, $nome);
    }

    /**
     * verify if the MacroCategoria already exists
     * @param $macroCategoria
     */
    public function verifyMacroCategoria($macroCategoria){

    }

}