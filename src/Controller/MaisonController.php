<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Maison;
use App\Repository\MaisonRepository;

class MaisonController extends AbstractController
{
    /**
     * @Route("/maison", name="maison")
     */
    public function index()
    {
        return $this->render('maison/index.html.twig', [
            'controller_name' => 'MaisonController',
        ]);
    }

  /**
	* @Route("/maison/consulterEtudiant/{id}", name="maison_show")
	*/
    public function ConsulterMaisonEtudiant(Maison $uneMaison)
    	{
    		return $this->render('maison/consulterMaisonEtudiant.html.twig', [
                'maison' => $uneMaison,]);
    	}



    /**
     * @Route("/maison/liste", name="listerMaisonmaison")
     */
    public function listerMaison(MaisonRepository $repository)
    {
      $listeMaisons =  $repository->findAll();
        return $this->render('maison/listerMaison.html.twig',[
                    'maisons' => $listeMaisons
        ]);
    }

    /**
     * @Route("/maison/ajouter", name="ajouterMaison")
     */
     public function ajouterMaison(){

       // récupère le manager d'entités
             $entityManager = $this->getDoctrine()->getManager();

             // instanciation d'un objet Etudiant
             $etudiant = new Maison();
             $etudiant->setCode('SPT');
             $etudiant->setNom('Serpentard');
             $etudiant->setNombreBonbons(0);

             $etudiant2 = new Maison();
             $etudiant2->setCode('GFD');
             $etudiant2->setNom('Griffondor');
             $etudiant2->setNombreBonbons(0);

             $etudiant3 = new Maison();
             $etudiant3->setCode('PFS');
             $etudiant3->setNom('Poufsouple');
             $etudiant3->setNombreBonbons(0);

             $etudiant4 = new Maison();
             $etudiant4->setCode('SRG');
             $etudiant4->setNom('Serdaigle');
             $etudiant4->setNombreBonbons(0);


             // Indique à Doctrine de persister l'objet --> mettre les varaible ici
             $entityManager->persist();

             // Exécue l'instruction sql permettant de persister lobjet, ici un INSERT INTO
             $entityManager->flush();


             // renvoie vers la vue de consultation de l'étudiant en passant l'objet etudiant en paramètre
            return $this->render('etudiant/accueil.html.twig');

       }





}
