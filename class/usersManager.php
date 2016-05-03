<?php

/**
 * Created by PhpStorm.
 * User: AJOURD
 * Date: 01/04/2016
 * Time: 14:57
 */
class usersManager extends bdd
{
    /**
     * @param $nbUser / 0 = Illimite
     * @return array
     */

    private $_id = [];
    private $_motDePasse = [];
    private $_nom = [];
    private $_prenom = [];
    private $_mail = [];
    private $_isClient= [];

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return array
     */
    public function getMotDePasse()
    {
        return $this->_motDePasse;
    }

    /**
     * @param array $motDePasse
     */
    public function setMotDePasse($motDePasse)
    {
        $this->_motDePasse = $motDePasse;
    }

    /**
     * @return array
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param array $nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    /**
     * @return array
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * @param array $prenom
     */
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    /**
     * @return array
     */
    public function getMail()
    {
        return $this->_mail;
    }

    /**
     * @param array $mail
     */
    public function setMail($mail)
    {
        $this->_mail = $mail;
    }

    /**
     * @return array
     */
    public function getIsClient()
    {
        return $this->_isClient;
    }

    /**
     * @param array $isClient
     */
    public function setIsClient($isClient)
    {
        $this->_isClient = $isClient;
    }



    public function remplissageUser()
    {
        $reponse = $this->hydrate()->query('SELECT * FROM utilisateur');
        while ($donnees = $reponse->fetch()) {
            $this->_id[] = $donnees['Identifiant'];
            $this->_motDePasse[] = $donnees['MotDePasse'];
            $this->_nom[] = $donnees['Nom'];
            $this->_prenom = $donnees['Prenom'];
            $this->_mail[] = $donnees['Mail'];
            $this->_isClient = $donnees['IsClient'];
        }
    }
}