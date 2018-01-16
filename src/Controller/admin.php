<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
/**
 * Description of admin
 *
 * @author moreau
 */
class admin extends Controller  {
   
    /**
     * 
     * @return string
     * @Route("/")
     */
    public function index() {
        $welcomeMessage = "Adminnistration portfolio";

        return $this->render('index.html.twig', array(
            'welcome' => $welcomeMessage
        ));
    }
}
