<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 27/11/18
 * Time: 20:47
 */
namespace AppBundle\Form\DataTransformer;

use Doctrine\ORM\EntityManagerInterface;

class ObjectToStringTransformer
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function transform($object)
    {
        if (null === $object) {
            return '';
        }

        return $object->getName();
    }

    public function reverseTransform($string)
    {
        $object = $this->entityManager
            ->getRepository(Issue::class)
            // query for the issue with this id
            ->find($string)
        ;

        if (null === $issue) {
            // causes a validation error
            // this message is not shown to the user
            // see the invalid_message option
            throw new TransformationFailedException(sprintf(
                'An issue with number "%s" does not exist!',
                $issueNumber
            ));
        }

        return $issue;
    }
}