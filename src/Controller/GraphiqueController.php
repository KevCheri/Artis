<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GraphiqueController extends AbstractController
{
    /**
     * @Route("/graphique/entreprise", name="graphique")
     */
    public function index()
    {

        return $this->render('graphique/index.html.twig', 
        );
    }
}
