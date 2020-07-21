<?php

namespace App\Controller;

use App\Entity\Entreprise;
use App\Form\EntrepriseType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class EntrepriseController extends AbstractController
{
    public function index()
    {
        return $this->render('formulaire/index.html.twig');
    }

    public function add()
    {
        $entreprise = new Entreprise();
        $form = $this->createForm(EntrepriseType::class, $entreprise);

    	return $this->render('formulaire/entreprise_form.html.twig', [
            'form' => $form->createView()
        ]);
    }

}