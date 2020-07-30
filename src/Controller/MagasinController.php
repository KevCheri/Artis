<?php

namespace App\Controller;

use App\Form\MagasinType;
use App\Entity\Magasin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MagasinController extends AbstractController
{
    /**
     * @Route("/magasin", name="create_magasin")
     */
    public function register(Request $request)
    {
        $magasin = new Magasin();
        $form = $this->createForm(MagasinType::class, $magasin);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($magasin);
            $entityManager->flush();

            return $this->redirectToRoute('create_magasin');
        }
        return $this->render(
            'magasin/magasin.html.twig',  
            array(
                'form' => $form->createView(),
                'magasin' => $magasin
            )
        );
    }
}
