<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Baguette;
use App\Repository\BaguetteRepository;

class BaguetteController extends AbstractController
{
    /**
     * @Route("/baguette", name="baguette")
     */
    public function index()
    {
        return $this->render('baguette/index.html.twig', [
            'controller_name' => 'BaguetteController',
        ]);
    }
    /**
     * @Route("/baguette/ajouter", name="ajouterBaguette")
     */
     public function ajouterBaguette(){

       // récupère le manager d'entités
             $entityManager = $this->getDoctrine()->getManager();

             // instanciation d'un objet Etudiant
             $baguette = new Baguette();
             $baguette->setCode('SUP');
             $baguette->setLibelle('Superieur');
             $baguette->setPuissance(0);


             // Indique à Doctrine de persister l'objet --> mettre les varaible ici
             $entityManager->persist();

             // Exécue l'instruction sql permettant de persister lobjet, ici un INSERT INTO
             $entityManager->flush();


             // renvoie vers la vue de consultation de l'étudiant en passant l'objet etudiant en paramètre
            return $this->render('etudiant/accueil.html.twig');

       }

       /**
        * @Route("/baguette/liste", name="listerBaguette")
        */
       public function listerMaison(BaguetteRepository $repository)
       {
         $listeBaguette =  $repository->findAll();
           return $this->render('baguette/listerBaguette.html.twig',[
                       'listeBaguette' => $listeBaguette
           ]);
       }
}
