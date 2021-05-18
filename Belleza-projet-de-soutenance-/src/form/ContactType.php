<?php
namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extention\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add( child 'prenom', TextType::class )
        ->add( child 'nom', TextType::class )
        ->add( child 'phone', TextType::class )
        ->add( child 'email', TextType::class )
        ->add( child 'message', TextareaType::class )
        ;
    }
}

public function configureOptions(OptionsResolver $resolver)
{
    $resolver->setDefaults([
        'data_class' => Contact::class
        
    ]);


}