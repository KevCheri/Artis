<?php

namespace App\Controller;

use App\Entity\Annonces;
use App\Entity\Images;
use App\Form\AnnoncesType;
use App\Form\EditProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\userPasswordEncoderInterface;

class userController extends AbstractController
{
    /**
     * @Route("/back/user", name="user")
     */
    public function index()
    {
        return $this->render('user/user.html.twig');
    }

    /**
     * @Route("/user/annonces/ajout", name="user_annonces_ajout")
     */
    public function ajoutAnnonce(Request $request)
    {
        $annonce = new Annonces;

        $form = $this->createForm(AnnoncesType::class, $annonce);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $annonce->setuser($this->getuser());
            $annonce->setActive(false);
            // On récupère les images transmises
            $images = $form->get('images')->getData();
                
            // On boucle sur les images
            foreach($images as $image){
                // On génère un nouveau nom de fichier
                $fichier = md5(uniqid()).'.'.$image->guessExtension();
                
                // On copie le fichier dans le dossier uploads
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
                
                // On crée l'image dans la base de données
                $img = new Images();
                $img->setName($fichier);
                $annonce->addImage($img);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();

            return $this->redirectToRoute('user');
        }

        return $this->render('user/annonces/ajout.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/user/annonces/edit/{id}", name="user_annonces_edit")
     */
    public function editAnnonce(Annonces $annonce, Request $request)
    {
        $form = $this->createForm(AnnoncesType::class, $annonce);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $annonce->setActive(false);
            // On récupère les images transmises
            $images = $form->get('images')->getData();
                
            // On boucle sur les images
            foreach($images as $image){
                // On génère un nouveau nom de fichier
                $fichier = md5(uniqid()).'.'.$image->guessExtension();
                
                // On copie le fichier dans le dossier uploads
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
                
                // On crée l'image dans la base de données
                $img = new Images();
                $img->setName($fichier);
                $annonce->addImage($img);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();

            return $this->redirectToRoute('user');
        }

        return $this->render('user/annonces/ajout.html.twig', [
            'form' => $form->createView(),
            'annonce' => $annonce
        ]);
    }

    /**
     * @Route("/user/profil/modifier", name="user_profil_modifier")
     */
    public function editProfile(Request $request)
    {
        $user = $this->getuser();
        $form = $this->createForm(EditProfileType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('message', 'Profil mis à jour');
            return $this->redirectToRoute('user');
        }

        return $this->render('user/editprofile.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/user/pass/modifier", name="user_pass_modifier")
     */
    public function editPass(Request $request, userPasswordEncoderInterface $passwordEncoder)
    {
        if($request->isMethod('POST')){
            $em = $this->getDoctrine()->getManager();

            $user = $this->getuser();

            // On vérifie si les 2 mots de passe sont identiques
            if($request->request->get('pass') == $request->request->get('pass2')){
                $user->setPassword($passwordEncoder->encodePassword($user, $request->request->get('pass')));
                $em->flush();
                $this->addFlash('message', 'Mot de passe mis à jour avec succès');

                return $this->redirectToRoute('user');
            }else{
                $this->addFlash('error', 'Les deux mots de passe ne sont pas identiques');
            }
        }

        return $this->render('user/editpass.html.twig');
    }

    /**
     * @Route("/supprime/image/{id}", name="annonces_delete_image", methods={"DELETE"})
     */
    public function deleteImage(Images $image, Request $request){
        $data = json_decode($request->getContent(), true);

        // On vérifie si le token est valide
        if($this->isCsrfTokenValid('delete'.$image->getId(), $data['_token'])){
            // On récupère le nom de l'image
            $nom = $image->getName();
            // On supprime le fichier
            unlink($this->getParameter('images_directory').'/'.$nom);

            // On supprime l'entrée de la base
            $em = $this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();

            // On répond en json
            return new JsonResponse(['success' => 1]);
        }else{
            return new JsonResponse(['error' => 'Token Invalide'], 400);
        }
    }

}