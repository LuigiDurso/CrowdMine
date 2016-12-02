<?php

/**
 * Created by PhpStorm.
 * User: Fabricio Nicolas Madaio
 * Date: 01/12/2016
 * Time: 10:10
 */
abstract class Filter
{

    protected $filterString = "";

    /**
     * @param string $fString
     */
    public function setFilterString($fString)
    {
        $this->filterString = $fString;
    }


    /**
     * apply filter to base query without concatenation
     * @param $query
     */
    public function setFilter(&$query){
        $query.=$this->filterString;
    }

    /**
     * concatenate filter to base query
     * @param $query
     */
    public function addFilter(&$query){
        $query.=" AND ";
        $this->setFilter($query);
    }
}