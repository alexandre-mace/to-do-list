<?php

namespace AppBundle\Handler;

use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Task;

class TaskCheckHandler
{
    private $manager;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    public function handle(Task $task)
    {
        $task->setComplete(!$task->getComplete());
        $this->manager->flush();
        return true;
    }

}