<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Description of ViewController
 *
 * @author vince
 */
class ViewController {
       /**
     * @Route("/admin")
     * @Template("AdminBundle:Default:admin.html.twig")
     */
    public function getAnnonces(){

        }
}
