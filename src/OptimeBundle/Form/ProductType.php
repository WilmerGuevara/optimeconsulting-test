<?php

namespace OptimeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ProductType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('code',TextType::class, array('label'=>'Código'))
        ->add('name',TextType::class, array('label'=>'Nombre'))
        ->add('description',TextType::class, array('label'=>'Descripción'))
        ->add('brand',TextType::class, array('label'=>'Marca'))
        ->add('price',NumberType::class, array('label'=>'Precio', 'invalid_message' => 'El precio de ser un número válido'))
        ->add('category');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OptimeBundle\Entity\Product'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'optimebundle_product';
    }


}
