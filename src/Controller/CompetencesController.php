<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


use Symfony\Component\Routing\Annotation\Route;


use App\Entity\Competences;
use App\Entity\Professeur;
use App\Repository\CompetencesRepository;

class CompetencesController extends AbstractController
{
    /**
     * @Route("/competences", name="competences")
     */
    public function index()
    {
        return $this->render('competences/index.html.twig', [
            'controller_name' => 'CompetencesController',
        ]);
    }
    /**
  	* @Route("/competences/ConsulterProfesseur/{id}", name="ConsulterCompetenceProfesseur")
  	*/
      public function ConsulterCompetenceProfesseur(Competences $uneCompetence)
      	{
      		return $this->render('competences/consulterCompetenceProfesseur.html.twig', [
                  'competence' => $uneCompetence,]);
      	}



    /**
     * @Route("/competences/liste", name="listerCompetence")
     */
    public function listerCompetence(CompetencesRepository $repository)
    {
      $listeCompetences = $repository->findAll();

      return $this->render('competences/listerCompetence.html.twig',[
        'controller_name' => 'CompetencesController',
        'listeCompetences' => $listeCompetences
      ]);

    }

    /**
     * @Route("/competences/ajouter", name="ajouterCompetence")
     */
    public function ajouterCompetence()
    {
      // récupère le manager d'entités
            $entityManager = $this->getDoctrine()->getManager();

            // instanciation d'un objet Etudiant
            $competence = new Competences();
            $competence->setCode('POT');
            $competence->setLibelle('Potions');
            $competence->setNombreEtudiantsMax(12);

            $competence2 = new Competences();
            $competence2->setCode('DFM');
            $competence2->setLibelle('Défence contre les force du mal');
            $competence2->setNombreEtudiantsMax(40);

            $competence3 = new Competences();
            $competence3->setCode('MET');
            $competence3->setLibelle('Métamorphoses');
            $competence3->setNombreEtudiantsMax(20);

            $competence4 = new Competences();
            $competence4->setCode('BOT');
            $competence4->setLibelle('Botanique');
            $competence4->setNombreEtudiantsMax(40);

            $competence5 = new Competences();
            $competence5->setCode('AST');
            $competence5->setLibelle('Astronomie');
            $competence5->setNombreEtudiantsMax(40);

            $competence6 = new Competences();
            $competence6->setCode('DIV');
            $competence6->setLibelle('Divination');
            $competence6->setNombreEtudiantsMax(20);

            // Indique à Doctrine de persister l'objet
            $entityManager->persist();
            // Exécue l'instruction sql permettant de persister lobjet, ici un INSERT INTO
            $entityManager->flush();


            // renvoie vers la vue de consultation de l'étudiant en passant l'objet etudiant en paramètre
           return $this->render('etudiant/accueil.html.twig');

      }



}
