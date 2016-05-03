<?php
/**
 * Created by PhpStorm.
 * User: AJOURD
 * Date: 01/04/2016
 * Time: 14:49
 */

function chargerClasse($classname)
{
    require 'class/' . $classname . '.php';
}

spl_autoload_register('chargerClasse');


