<?php

namespace GfctBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class EmpresaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',TextType::class,array('label_attr'=>array('class'=>'etiqueta'),'attr'=>array('class'=>'inputForm')))
            ->add('direccion',TextType::class,array('label_attr'=>array('class'=>'etiqueta'),'attr'=>array('class'=>'inputForm')))
            ->add('cp',TextType::class,array('label'=>'Codigo Postal','label_attr'=>array('class'=>'etiqueta'),'attr'=>array('class'=>'inputForm')))
            ->add('telefono1',TextType::class,array('label'=>'Telefono 1','label_attr'=>array('class'=>'etiqueta'),'attr'=>array('class'=>'inputForm')))
            ->add('telefono2',TextType::class,array('label'=>'Telefono 1','label_attr'=>array('class'=>'etiqueta'),'attr'=>array('class'=>'inputForm')))
            ->add('fechaCreacion',DateType::class)
            ->add('Salvar',SubmitType::class)
            ->add('Borrar',ResetType::class)
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GfctBundle\Entity\Empresa'
        ));
    }
}
