<?php

namespace App\Controller;

use App\Form\UtilisateurType;
use App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Component\Security\Core\Encoder\UtilisateurPasswordEncoderInterface;

class UtilisateurController extends AbstractController
{
    /**
     * @Route("/register_utilisateur", name="utilisateur_registration")
     */
    public function register(Request $request/*,EntreprisePasswordEncoderInterface $passwordEncoder*/)
    {

        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            //$password = $passwordEncoder->encodePassword($entreprise, $entreprise->getPlainPassword());
            $utilisateur->setPassword(base64_encode($utilisateur->getPlainPassword()));
            $entityManager->persist($utilisateur);
            $entityManager->flush();

            return $this->redirectToRoute('utilisateur_registration');
        }

        return $this->render(
            'utilisateur/register_utilisateur.html.twig', 
            array(
                'form' => $form->createView(),
                'utilisateur' => $utilisateur
            )
        );
    }
}
