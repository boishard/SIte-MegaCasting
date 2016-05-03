<?php

/**
 * Created by PhpStorm.
 * User: AJOURD
 * Date: 01/04/2016
 * Time: 15:04
 */
class bdd
{

    public function __construct()
    {
        $this->hydrate();
    }

    public function hydrate()
    {
        $bdd = new PDO('mysql:host=localhost;dbname=megaproduction', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd;
    }
}