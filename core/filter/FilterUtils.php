<?php

/**
 * Created by PhpStorm.
 * User: Fabricio Nicolas Madaio
 * Date: 01/12/2016
 * Time: 17:43
 */
class FilterUtils
{
    /**
     * this method applies an array of filters to a single query
     * @param array $filters
     * @param string $query
     */
    public static function applyFilters(array $filters, &$query = ""){

        $size = count($filters);

        if($size>0 && $filters[0] instanceof Filter)
            $filters[0]->setFilter($query);
        else
            return;

        for($i=1;$i<$size;$i++){
            $f = $filters[$i];
            if (is_object($f) && $f instanceof Filter) {
                $f->addFilter($query);
            }
        }
    }
}