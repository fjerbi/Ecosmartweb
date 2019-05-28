<?php



namespace  AnnonceBundle\Form;

use Doctrine\ORM\EntityRepository;
use Gregwar\CaptchaBundle\Type\CaptchaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use AppBundle\Repository\countryRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

/**
 * @property  countryRepository
 */
class AnnonceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('adresse', ChoiceType::class,array(
                'choices'=>array(
                    'Ariana'=>'Ariana',
                    'Beja'=>'Beja',
                    'Ben Arous'=>'Ben Arous',
                    'Tunis'=>'Tunis',
                    'Bizerte'=>'Bizerte',
                    'Gabes'=>'Gabes',
                    'Gafsa'=>'Gafsa',
                    'Jendouba'=>'Jendouba',
                    'Kairouane'=>'Kairouane',
                    'Kasserine'=>'Kasserine',




                )
            ))
            ->add('photo', FileType::class, array('data_class' => null,'required' => false))



            ->add('captcha', CaptchaType::class)
            ->add('Ajouter',SubmitType::class);
    }/**
 * {@inheritdoc}
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Annonce'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'annoncebundle_annonce';
    }


}
