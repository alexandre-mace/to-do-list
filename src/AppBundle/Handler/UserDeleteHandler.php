<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 27/11/18
 * Time: 15:16
 */

namespace AppBundle\Handler;


use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

class UserDeleteHandler
{
    private $manager;
    private $flashBag;

    public function __construct(EntityManagerInterface $manager, FlashBagInterface $flashBag)
    {
        $this->manager = $manager;
        $this->flashBag = $flashBag;
    }

    public function handle(User $user)
    {
        $this->manager->remove($user);
        $this->manager->flush();
        $this->flashBag->add('success', 'The trick has been successfully deleted !');
        return true;
    }
}