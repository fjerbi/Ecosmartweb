<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Form;

use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;
use Symfony\Component\Validator\Constraints\File;
use Gregwar\CaptchaBundle\Type\CaptchaType;
class ProfileFormType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',\Symfony\Component\Form\Extension\Core\Type\TextType::class,array('label'=>'nom'))
            ->add('prenom',\Symfony\Component\Form\Extension\Core\Type\TextType::class,array('label'=>'prenom'))
          ->add('genre', ChoiceType::class, array(
              'choices'=>array(
                  'Homme'=>'Homme',
                  'Femme'=>'Femme'
              )
          ))
            ->add('date_naissance', \Symfony\Component\Form\Extension\Core\Type\DateType::class)
            ->add('imageprofile',FileType::class,array('required'=>false))
    ->add('gouvernorat', ChoiceType::class, array(
        'choices'=>array(
            'Ariana'=>'Ariana',
        'Zaghouan'=>'Zaghouane'
        )
    ))
     ->add('adresse')
            ->add('fax');





    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {

    }




    public function getParent()
    {
        return BaseRegistrationFormType::class;
    }


}