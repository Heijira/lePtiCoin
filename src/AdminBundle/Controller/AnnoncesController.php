<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AdminBundle\Controller;

use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of AnnoncesController
 *
 * @author vince
 */
class AnnoncesController extends Controller{
    /**
     * @Route("/admin/offre")
     * @Template("AdminBundle:Default:offre.html.twig")
     */
    public function getAnnonces(){
        //L'entity manager va nous permettre de manipuler les entités
        $em = $this->getDoctrine()->getEntityManager();
        //partie qui va nous servir a mapper les entrée de la table
        $rsm = new ResultSetMappingBuilder($em);
        //Le mappage se fera avec l'entitée News(qui est déclaré ici avec la table Niouz... voir l'annotation table de l'entité)
        //le deuxieme parametre est un alias au besoin qui va nous servir pour les clauses SQL
        $rsm->addRootEntityFromClassMetadata('AdminBundle:annonces', 'annonces');
        //Ici on fait une requete SQL "classique" (on fera mieux plus tard ;), on y passe aussi notre mapping pour que doctrine puisse 
        //nous ...
        $query = $em->createNativeQuery("select * from annonces", $rsm);
        //...renvoyer une liste d'objets corespond a notre demande (ici News)
        //$niouzes est donc une liste de News
        $annonces = $query->getResult();
        //on jete notre liste de news vers la vue pour les afficher (notre clé pour twig est donc : news)
        return array('offre' => $annonces);
        }
}
