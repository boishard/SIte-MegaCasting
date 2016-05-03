<?php
/**
 * Created by PhpStorm.
 * User: AJOURD
 * Date: 01/04/2016
 * Time: 14:40
 */

include 'inc/bdd.php';
$bdd = new usersManager();
$pouet = $bdd->listerUser();

foreach ($pouet as $value){
    echo $value;
}