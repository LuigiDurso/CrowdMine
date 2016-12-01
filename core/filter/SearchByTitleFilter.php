<?php

/**
 * Created by PhpStorm.
 * User: Fabricio Nicolas Madaio
 * Date: 01/12/2016
 * Time: 10:12
 */
class SearchByTitleFilter extends Filter
{

    private $title;

    /**
     * SearchByTitleFilter constructor.
     * @param $title
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    public function setFilter(&$query)
    {
        $query.= "LIKE Title = ".$this->title;
    }


}