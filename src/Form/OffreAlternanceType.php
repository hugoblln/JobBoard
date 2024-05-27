<?php

namespace App\Form;

use App\Entity\OffreAlternance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class OffreAlternanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Entreprise', TextType::class, [
                'required' => false
            ])
            ->add('Localisation',TextType::class, [
                'required' => false
            ])
            ->add('descriptionEntreprise',TextareaType::class,[
                'required' => false
            ])
            ->add('Poste',TextType::class, [
                'required' => false
            ])
            ->add('descriptionPoste', textareaType::class, [
                'required' => false
            ])
            ->add('Salaire',TextType::class, [
                'required' => false
            ])
            ->add('Languages',TextType::class, [
                'required' => false
            ])
            ->add('Requis',TextType::class, [
                'required' => false
            ])
            ->add('lienAnnonce',TextType::class,[
                'required' => false
            ]);

            if($options['edit']) {
            $builder->add('enLigne', CheckboxType::class,[
                'required' => false
            ])
                    ->add('Retour',CheckboxType::class, [
                        'required' => false
                    ]);
        }
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => OffreAlternance::class,
            'edit' => false
        ]);
    }
}
