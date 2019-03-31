<?php
/**
 * Created by PhpStorm.
 * User: Marta
 * Date: 06.01.2019
 * Time: 20:04
 */

namespace App\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options); // TODO: Change the autogenerated stub
        $builder
            ->add('rezerwacja', ChoiceType::class, array(
                'choices' => array(
                    'Akceptuj' => 'accept',
                    'Usuń' => 'delete'
                ),
                'label' => "Wybierz stan"
            ))
            ->add('dokiedy', TextType::class, array(
                'label' => "Do kiedy ważna rezerwacja.",
                "required" => false
            ))
            ->add('zapisz', SubmitType::class, array(
                'label' => "ZATWIERDŹ"
            ))
        ;
    }
}