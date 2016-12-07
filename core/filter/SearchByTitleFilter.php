<?php

/**
 * Created by PhpStorm.
 * User: Fabricio Nicolas Madaio
 * Date: 01/12/2016
 * Time: 10:12
 */
class SearchByTitleFilter extends Filter
{
    /**
     * SearchByTitleFilter constructor.
     * @param $title
     */
    public function __construct($title)
    {
        $this->setTitle($title);
    }

    public function setTitle($title)
    {
        parent::setFilterString(" `titolo` LIKE '".$title."'% ");
    }

}