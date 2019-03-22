<?php
/**
 * Created by PhpStorm.
 * User: vinny
 * Date: 22/03/19
 * Time: 10:44
 */

function cleanData(array $data) : array
{
        foreach ($data as $dataCleaned ){
            trim($dataCleaned);
        }
        return $data;
};

