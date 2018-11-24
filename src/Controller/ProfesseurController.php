<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


use App\Entity\Competences;
use App\Entity\Professeur;
use App\Repository\ProfesseurRepository;



class ProfesseurController extends AbstractController
{
    /**
     * @Route("/professeur", name="professeur")
     */
    public function index()
    {
        return $this->render('professeur/index.html.twig', [
            'controller_name' => 'ProfesseurController',
        ]);
    }

    /**
	* @Route("/professeur/consulter/{id}", name="Professeur_show")
	*/
    public function show(Professeur $unProfesseur)
    	{

    		return $this->render('professeur/consulterProfesseurCompetences.html.twig', [
                'professeur' => $unProfesseur,]);
    	}


    /**
     * @Route("/professeur/liste", name="listerProfesseur")
     */
     public function listerProfesseur(ProfesseurRepository $repository)
     {
       $listeProfesseurs =  $repository->findAll();
         return $this->render('professeur\listerProfesseur.html.twig',[
                     'professeurs' => $listeProfesseurs
         ]);
     }

     /**
      * @Route("/Professeur/ajouter", name="ProfesseurMaison")
      */
      public function ajouterProfesseur(){

        // récupère le manager d'entités
              $entityManager = $this->getDoctrine()->getManager();

              // instanciation d'un objet Etudiant
              $professeur = new Professeur();
              $professeur->setNom('Bosn');
              $professeur->setPrenom('Marie');
              $professeur->setDateNaissance(new \DateTime('25-01-1952'));



              // Indique à Doctrine de persister l'objet --> mettre les varaible ici
              $entityManager->persist($professeur);

              // Exécue l'instruction sql permettant de persister lobjet, ici un INSERT INTO
              $entityManager->flush();


              // renvoie vers la vue de consultation de l'étudiant en passant l'objet etudiant en paramètre
             return $this->redirectToRoute('accueil');

        }


}
