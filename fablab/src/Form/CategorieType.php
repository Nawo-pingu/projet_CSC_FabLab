<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Materiel;
use App\Repository\MaterielRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        //dump($options);
        // Get the current [object] from 'data' option passed to the form    
        $categorie = $options['data'] ?? null;
        // get the [galerie]'s creator
        $member = $categorie->getMember();

        $builder
            ->add('description')
            ->add('published')
            ->add('materiels', null, [
                // adjust the loading of possible [objects] to those of the current member's [inventory]
                // the use helps pass the member to the lambda
                'query_builder' => function (MaterielRepository $er) use ($member) {
                    return $er->createQueryBuilder('o')
                        ->leftJoin('o.lieu', 'i')
                        ->leftJoin('i.member', 'm')
                        ->andWhere('m.id = :memberId')
                        ->setParameter('memberId', $member->getId())
                    ;
                },
                'by_reference' => false,
                // classe pas obligatoire
                //'class' => [Object]::class,
                // permet sélection multiple
                'multiple' => true,
                // affiche sous forme de checkboxes
                'expanded' => true
            ])

            ->add('member', null, [
                'disabled' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }
}
