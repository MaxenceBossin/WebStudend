<?php

namespace App\Form;

use App\Entity\Etudiant;
use App\Entity\Maison;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeInterface;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    //  $test= new Maison();
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance', DateType::class, array(
                'placeholder' => array('years' => 'Years', 'months' => 'Months', 'days' => 'Days'),
                'years' => range(1900,2018)
              ))
            ->add('ville')
            ->add('rue')
            ->add('codePostal')
            ->add('sexe',ChoiceType::class, array(
              'choices'=> array(
                'Masculin' => 'M',
                'Feminin' => 'F',
                'Autre' => 'A'
              )
            ))

            ->add('surnom')
            ->add('maison',EntityType::class,array(
              'class' => Maison::class,
              'choice_label'=>'nom'

            ))


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Etudiant::class,
        ]);
    }
}
