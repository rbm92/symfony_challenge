<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'required' => true,
                'multiple' => false,
                'expanded' => false,
                'choices' => [
                    '-- SELECT ONE -- ' => 'Undefined',
                    'Automotive' => 'Automotive',
                    'Baby' => 'Baby',
                    'Beauty' => 'Beauty',
                    'Fashion' => 'Fashion',
                    'Household' => 'Household',
                    'Industrial' => 'Industrial',
                    'Media' => 'Media',
                    'Pet' => 'Pet',
                    'Sports' => 'Sports',
                    'Videogames' => 'Videogames',
                    'Other' => 'Other'
                ]
            ])
            ->add('name')
            ->add('description')
            ->add('weight')
            ->add('enabled', CheckboxType::class, [
                'required' => true
            ]);

        // $builder->get('type')->addModelTransformer(new CallbackTransformer(
        //     function ($typeArray) {
        //         return count(array($typeArray));
        //     },
        //     function ($typeString) {
        //         return [$typeString];
        //     }
        // ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
