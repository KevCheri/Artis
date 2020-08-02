<?php

namespace App\Controller;

use App\Form\EntrepriseType;
use App\Entity\Entreprise;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Component\Security\Core\Encoder\EntreprisePasswordEncoderInterface;

class EntrepriseController extends AbstractController
{
//    /**
//     * @Route("/register", name="entreprise_registration")
//     */
//    public function register(Request $request/*,EntreprisePasswordEncoderInterface $passwordEncoder*/)
//    {
//
//        $entreprise = new Entreprise();
//        $form = $this->createForm(EntrepriseType::class, $entreprise);
//
//        $form->handleRequest($request);
//        if ($form->isSubmitted() && $form->isValid()) {
//            $entityManager = $this->getDoctrine()->getManager();
//            //$password = $passwordEncoder->encodePassword($entreprise, $entreprise->getPlainPassword());
//            $entreprise->setPassword(base64_encode($entreprise->getPlainPassword()));
//            $entityManager->persist($entreprise);
//            $entityManager->flush();
//
//            return $this->redirectToRoute('entreprise_registration');
//        }
//
//        return $this->render(
//            'entreprise/register.html.twig',
//            array(
//                'form' => $form->createView(),
//                'entreprise' => $entreprise
//                )
//        );
//    }
}