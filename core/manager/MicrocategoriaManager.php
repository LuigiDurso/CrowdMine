<?php

include_once MODEL_DIR . 'Macrocategoria.php';
include_once MODEL_DIR . 'Microcategoria.php';
/**
 * Created by PhpStorm.
 * User: Andrea Sarto
 * Date: 29/11/2016
 * Time: 00.15
 */
class MicrocategoriaManager extends Manager
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
     * @param Double $id
     * @param String $nome
     * @return Microcategoria
     */
    public function createMicrocategoria($nomeMicro, $idMacro){
        return new Microcategoria($nomeMicro, $idMacro);
    }

    /**
     * Add the Microcategoria into the dataBase
     *
     * @param Microcategoria $microcategoria
     * @param Macrocategoria $macrocategoria
     */
    public function addMicrocategoria($nomeMicro, $nomeMacro){
        if($this->checkMicrocategoria($nomeMicro)){
            return false;
        }else{
            $macroManager = new MacroCategoriaManager();
            $macro = $macroManager->getMacrocategoriaByName($nomeMacro);
            $AGGIUNGI_MICRO = "INSERT INTO 'microcategoria' (nome, id_macrocategoria) VALUES('%s', '%s')";
            $query = sprintf($AGGIUNGI_MICRO, $nomeMicro, $macro->getId());
            self::getDB()->query($query);
        }
    }

    /**
     * Delete a Microcategoria from dataBase
     *
     * @param Microcategoria $microcategoria
     */
    public function deleteMicrocategoria($nomeMicro){
        $RIMUOVI_MICROCATEGORIA = "DELETE FROM 'microcategoria' WHERE nome = '%s'";
        $query = sprintf($RIMUOVI_MICROCATEGORIA, $nomeMicro);
        self::getDB()->query($query);
    }

    /**
     * Edit an exist Microcategoria
     *
     * @param Microcategoria $microcategoria
     */
    public function editMicrocategoria($vecchioNome, $nuovoNome){
        $CHANGE_NOME_MICRO = "UPDATE 'microcategoria' SET nome='%s' WHERE nome='%s'";
        $query = sprintf($CHANGE_NOME_MICRO, $nuovoNome, $vecchioNome);
        self::getDB()->query($query);
    }

    /**
     * @param $nome
     * @return bool
     */
    public function checkMicrocategoria($nome){
        $SEARCH_MICRO = "SELECT * FROM 'microcategoria' WHERE nome='%s'";
        $query = sprintf($SEARCH_MICRO, $nome);
        $result = self::getDB()->query($query);
        if($result->num_rows == 1){
            return true;
        }else
            return false;
    }

    public function getMicrocategoriaByNome($nome){
        $GET_MICRO_BY_NOME = "SELECT * FROM 'microcategoria' WHERE nome  ='%s'";
        $query = sprintf($GET_MICRO_BY_NOME, $nome);
        $result = self::getDB()->query($query);
        $row = $result->fetch_assoc();
        return $this->createMicrocategoria($row['id'], $row['nome'], $row['id_macrocategoria']);
    }

    /**
     * Get the list of all Microcategoria into the dataBase
     *
     * @return array $listaMicro
     */
    public function findAll(){
        $FIND_ALL = "SELECT * FROM 'microcategoria'";
        $result = self::getDB()->query($FIND_ALL);
        $listaMicro = array();
        foreach($result->fetch_assoc() as $m){
            $micro = $this->createMicrocategoria($m['id'], $m['nome'], $m['id_macrocategoria']);
            array_push($micro);
        }
        return $listaMicro;
    }


}