<?php

/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 05/04/2016
 * Time: 00:10
 */
class rss extends bdd
{

        //On déclare la fonction Php :
        public function update_fluxRSS() {
            $xml = '<?xml version="1.0" encoding="UTF-8"?>';
            $xml .= '<rss version="2.0">';
            $xml .= '<channel>';
            $xml .= ' <title>Flux Rss MegaProduction</title>';
            $xml .= ' <description>Voici le flux RSS de MegaProduction ! Suivez le pour avoir les dernières offres !</description>';
            $xml .= ' <language>fr</language>';
            $xml .= ' <copyright>MegaProduction</copyright>';
            $xml .= ' <category>Offre</category>';
            $xml .= ' <generator>PHP/MySQL</generator>';

            $index_selection = 0;
            $limitation = 25;


            $reponse =$this->hydrate()->prepare('SELECT * FROM offrecasting ORDER BY Identifiant DESC LIMIT :index_selection, :limitation');
            $reponse->bindParam('index_selection', $index_selection, PDO::PARAM_INT);
            $reponse->bindParam('limitation', $limitation, PDO::PARAM_INT);
            $reponse->execute();

            while ($donnees = $reponse->fetch())
            {
                $xml .= '<item>';
                $xml .= '<title>'.stripcslashes($donnees['Intitule']).'</title>';
                $xml .= '<pubDate>'.(date("D, d M Y H:i:s O", strtotime($donnees['dateDebutPublication']))).'</pubDate>';
                $xml .= '<description>'.stripcslashes($donnees['DescriptionProfilRecherche']).'</description>';
                $xml .= '</item>';
            }

            $reponse->closeCursor();

            $xml .= '</channel>';
            $xml .= '</rss>';


            $fp = fopen("../rss/offreCasting.xml", 'w+');

            fputs($fp, $xml);

            fclose($fp);
    }
}