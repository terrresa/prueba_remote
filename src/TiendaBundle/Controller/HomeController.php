<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TiendaBundle\Controller;

use \Symfony\Bundle\FrameworkBundle\Controller\Controller;

use \Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Description of HomeController
 *
 * @author PCC-DOMINGO
 */
class HomeController extends Controller{
    
        /**
     * @Route("/home/")
     * @Template
     */

    public function indexAction(){
        
    $nombre = 'tina';
    $saludo = 'hola';
    
    $paramas= ['nombre'=>$nombre, 'saludo'=>$saludo];
        
        return $this->render('TiendaBundle::home/index.html.twig', $paramas);
        
    }
    
    
}
