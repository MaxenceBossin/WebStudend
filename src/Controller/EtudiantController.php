<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;


use App\Entity\Etudiant;
use App\Form\EtudiantType;
use App\Repository\EtudiantRepository;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Doctrine\Common\Persistence\ObjectManager;

class EtudiantController extends AbstractController
{
  /**
   * @Route("/", name="accueil")
   */
  public function accueil()
  {
    return $this->render('etudiant/accueil.html.twig');

  }



    /**
     * @Route("/", name="etudiant")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/EtudiantController.php',
        ]);
    }
    /**
     * @Route("/etudiant/ajouterEtudiant", name="ajoutEtudiant")
     * @Route("/etudiant/modifierInfo/{id}", name="modifierInfo")
     */
    public function formEtudiant(Etudiant $etudiant = null,Request $request, ObjectManager $manager)
    {
      if(!$etudiant){
        $etudiant = new Etudiant();
      }


      $form = $this->createForm(EtudiantType::class, $etudiant);
      $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){


            $manager->persist($etudiant);
            $manager->flush();

            return $this->redirectToRoute('listeEtudiant');
          }
            return $this->render('/etudiant/formEtudiant.html.twig',[
              'formEtudiant' => $form->createView(),
              'etudiant' => $etudiant

          ]);
        }



    /**
     * @Route("/etudiant/listerEtudiant", name="listeEtudiant")
     */
    public function listerEtudiant(EtudiantRepository $repository)
    {

      $listeEtudiant = $repository->findAll();

      return $this->render('/etudiant/listerEtudiant.html.twig',[
        'controller_name' => 'EtudiantController',
        'listeEtudiant' => $listeEtudiant
      ]);

    }




}
