<?php

/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 03/04/2016
 * Time: 00:55
 */
class offreCastingManager extends bdd
{
    private $_id= [];
    private $_intitule= [];
    private $_reference= [];
    private $_nbrDePoste= [];
    private $_localisation= [];
    private $_descPoste= [];
    private $_descProfilSearch= [];
    private $_coordonne= [];
    private $_idMetier= [];
    private $_idClient= [];
    private $_idTypeClient= [];

    /**
     * @return array
     */
    public function getIdTypeClient()
    {
        return $this->_idTypeClient;
    }

    /**
     * @param array $idTypeClient
     */
    public function setIdTypeClient($idTypeClient)
    {
        $this->_idTypeClient = $idTypeClient;
    }

    /**
     * @return array
     */
    public function getIdClient()
    {
        return $this->_idClient;
    }

    /**
     * @param array $idClient
     */
    public function setIdClient($idClient)
    {
        $this->_idClient = $idClient;
    }

    /**
     * @return array
     */
    public function getIntitule()
    {
        return $this->_intitule;
    }

    /**
     * @param array $intitule
     */
    public function setIntitule($intitule)
    {
        $this->_intitule = $intitule;
    }

    /**
     * @return array
     */
    public function getReference()
    {
        return $this->_reference;
    }

    /**
     * @param array $reference
     */
    public function setReference($reference)
    {
        $this->_reference = $reference;
    }

    /**
     * @return array
     */
    public function getNbrDePoste()
    {
        return $this->_nbrDePoste;
    }

    /**
     * @param array $nbrDePoste
     */
    public function setNbrDePoste($nbrDePoste)
    {
        $this->_nbrDePoste = $nbrDePoste;
    }

    /**
     * @return array
     */
    public function getLocalisation()
    {
        return $this->_localisation;
    }

    /**
     * @param array $localisation
     */
    public function setLocalisation($localisation)
    {
        $this->_localisation = $localisation;
    }

    /**
     * @return array
     */
    public function getDescPoste()
    {
        return $this->_descPoste;
    }

    /**
     * @param array $descPoste
     */
    public function setDescPoste($descPoste)
    {
        $this->_descPoste = $descPoste;
    }

    /**
     * @return array
     */
    public function getDescProfilSearch()
    {
        return $this->_descProfilSearch;
    }

    /**
     * @param array $descProfilSearch
     */
    public function setDescProfilSearch($descProfilSearch)
    {
        $this->_descProfilSearch = $descProfilSearch;
    }

    /**
     * @return array
     */
    public function getCoordonne()
    {
        return $this->_coordonne;
    }

    /**
     * @param array $coordonne
     */
    public function setCoordonne($coordonne)
    {
        $this->_coordonne = $coordonne;
    }

    /**
     * @return array
     */
    public function getIdMetier()
    {
        return $this->_idMetier;
    }

    /**
     * @param array $idMetier
     */
    public function setIdMetier($idMetier)
    {
        $this->_idMetier = $idMetier;
    }

    /**
     * @return array
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param array $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    public function remplissageDonnee()
    {
        $reponse = $this->hydrate()->query('SELECT * FROM offrecasting');
        while ($donnees = $reponse->fetch())
        {
            $this->_id[] = $donnees['Identifiant'];
            $this->_intitule[] = $donnees['Intitule'];
            $this->_reference[] = $donnees['Reference'];
            $this->_nbrDePoste[] = $donnees['nombreDePoste'];
            $this->_localisation[] = $donnees['Localisation'];
            $this->_descPoste[] = $donnees['DescriptionPoste'];
            $this->_descProfilSearch[] = $donnees['DescriptionProfilRecherche'];
            $this->_coordonne[] = $donnees['Coordonne'];
            $this->_idMetier[] = $donnees['IdentifiantMetier'];
            $this->_idClient[] = $donnees['IdentifiantClient'];
            $this->_idTypeClient[] = $donnees['IdentifiantTypeContrat'];
        }
    }

    public function listerOffreCastingFooterHome()
    {
        $longueurOffreCasting = sizeof($this->_intitule);
        if ($longueurOffreCasting <= 5){
            for ($i = $longueurOffreCasting - 1; $i >= 0; $i--)
                echo '<li><a href="#">' . $this->getIntitule()[$i] . '</a></li>';
        }elseif ($longueurOffreCasting > 5){
            for ($i = $longueurOffreCasting - 1; $i >$longueurOffreCasting - 6; $i--)
                echo '<li><a href="#">' . $this->getIntitule()[$i] . '</a></li>';
        }else{

        }
    }

    public function listerOffreCastingHome(){
        $longueurOffreCasting = sizeof($this->_intitule);
        if ($longueurOffreCasting <= 4){
            for ($i = $longueurOffreCasting - 1; $i >= 0; $i--) {
                echo '<div class="col-sm-3 offres">';
                echo '<img src="img/img1.JPG" alt=""/>';
                echo '<div class="descriptionOffres">';
                echo '<p class="category">Réference : ' .$this->getReference()[$i] . '</p>';
                echo '<h3 class="text-center">' . $this->getIntitule()[$i] . '</h3>';
                echo '<p>' . $this->getDescPoste()[$i] . '</p>';
                echo '<a href="#" class="btn btn-primary btn-warning">Voir l\'Offres <span class="glyphicon glyphicon-chevron-right"></span></a>';
                echo '</div>';
                echo '</div>';

            }
        }elseif ($longueurOffreCasting > 4){
            for ($i = $longueurOffreCasting - 1; $i >$longueurOffreCasting - 5; $i--) {
                echo '<div class="col-sm-3 offres">';
                echo '<img src="img/img1.JPG" alt=""/>';
                echo '<div class="descriptionOffres">';
                echo '<p class="category">Réference : ' .$this->getReference()[$i] . '</p>';
                echo '<h3 class="text-center">' . $this->getIntitule()[$i] . '</h3>';
                echo '<p>' . $this->getDescPoste()[$i] . '</p>';
                echo '<a href="#" class="btn btn-primary btn-warning">Voir l\'Offres <span class="glyphicon glyphicon-chevron-right"></span></a>';
                echo '</div>';
                echo '</div>';

            }
        }else{

        }
    }

    public function listerOffreCastingAll(){
        $longueurOffreCasting = sizeof($this->_intitule);
            for ($i = $longueurOffreCasting - 1; $i >= 0; $i--) {
                echo '<div class="col-sm-3 offres">';
                echo '<img src="img/img1.JPG" alt=""/>';
                echo '<div class="descriptionOffres">';
                echo '<p class="category">Réference : ' .$this->getReference()[$i] . '</p>';
                echo '<h3 class="text-center">' . $this->getIntitule()[$i] . '</h3>';
                echo '<p>' . $this->getDescPoste()[$i] . '</p>';
                echo '<a href="#" class="btn btn-primary btn-warning">Voir l\'Offres <span class="glyphicon glyphicon-chevron-right"></span></a>';
                echo '</div>';
                echo '</div>';

            }
    }
}
?>