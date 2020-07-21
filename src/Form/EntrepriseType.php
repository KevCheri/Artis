<?php

namespace App\Form;

use App\Entity\Entreprise;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntrepriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class) 
            ->add('prenom',TextType::class)
            ->add('email',EmailType::class)
            ->add('password',PasswordType::class)
            ->add('siret', NumberType::class)
            ->add('denominationSocial',TextType::class)
            ->add('produitType',ChoiceType::class)
            ->add('adresse', TextType::class)
            ->add('pays',CountryType::class)
            ->add('codePostal',NumberTyper::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Entreprise::class,
        ]);
    }
}
