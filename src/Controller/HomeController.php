<?php

namespace App\Controller;

use App\Entity\Magasin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $magasins = $entityManager->getRepository(Magasin::class)->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'magasins' => $magasins
        ]);
    }
}
