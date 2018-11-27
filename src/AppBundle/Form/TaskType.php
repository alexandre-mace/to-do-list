<?php

namespace AppBundle\Form;

use AppBundle\Form\DataTransformer\UserToStringTransformer;
use AppBundle\Form\EventListener\AuthorAutocompletedSubscriber;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityManagerInterface;


class TaskType extends AbstractType
{
    private $transformer;

    public function __construct(UserToStringTransformer $transformer)
    {
        $this->transformer = $transformer;
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('complete')
            ->add('author', TextType::class);
        $builder->get('author')
            ->addModelTransformer($this->transformer);
    }

    public function onPreSubmit(FormEvent $event)
    {
        $user = $event->getData();
        $form = $event->getForm();

        if (!$user) {
            return;
        }
        // checks whether the user has chosen to display their email or not.
        // If the data was submitted previously, the additional value that
        // is included in the request variables needs to be removed.
/*        if (true === $user['show_email']) {
            $form->add('email', EmailType::class);
        } else {
            unset($user['email']);
            $event->setData($user);
        }*/
    }


    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Task'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_task';
    }


}
