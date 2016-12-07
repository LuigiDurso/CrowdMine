<?php

/**
 * Created by PhpStorm.
 * User: Fabricio Nicolas Madaio
 * Date: 01/12/2016
 * Time: 10:12
 */
class SearchByUserIdFilter extends Filter
{

    private $title;

    /**
     * SearchByUserIdFilter constructor.
     * @param $userid
     */
    public function __construct($userid)
    {
        $this->setUserId($userid);
    }

    public function setUserId($userid)
    {
        parent::setFilterString(" `id_utente` LIKE '".$userid."'% ");
    }

}