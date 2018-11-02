<?php

namespace AppBundle\Handler;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use AppBundle\Entity\Task;

class UpdateTaskHandler
{
    private $manager;
    private $flashBag;

    public function __construct(EntityManagerInterface $manager, FlashBagInterface $flashBag)
    {
        $this->manager = $manager;
        $this->flashBag = $flashBag;
    }

    public function handle(Task $task)
    {
        $task->setComplete(!$task->getComplete());
        $this->manager->flush();
        $this->flashBag->add('success', 'The task has been successfully updated !');
        return true;
    }
}