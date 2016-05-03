<?php
function connectBdd() 
{
    $pdo = new PDO("dblib:host=SRV03;dbname=MegaProduction", "sa", "P@ssw0rd");
    //$bdd = new PDO("dblib:host=SRV03-DATABASE:1433;dbname=megaproduction","sa","P@ssw0rd");
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
?>