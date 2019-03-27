<?php
/**
 * Created by PhpStorm.
 * User: laughingman
 * Date: 22/03/19
 * Time: 14:03
 */


function trimArray(array $inputArray) :array

{
    foreach ($inputArray as $key => $value){
        $data[$key] = trim($value);
    }

    return $data;
}
