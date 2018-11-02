<?php

namespace AppBundle\Handler;

use AppBundle\Entity\Task;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

class UpdateTaskPositionHandler
{
    private $manager;
    private $flashBag;

    public function __construct(EntityManagerInterface $manager, FlashBagInterface $flashBag)
    {
        $this->manager = $manager;
        $this->flashBag = $flashBag;
    }

    public function handle(Task $task, $post)
    {
        $positionStart = $post['start_pos'];
        $positionEnd = $post['end_pos'];
        $movement = $post['movement'];

        if ($movement === "down") {
            $tasks = $this->manager->getRepository(Task::class)->findByGreaterStartPositionAndLowerOrEqualEndPosition($positionStart, $positionEnd, $task->getId());
            foreach ($tasks as $taskElem) {
                $taskElem->setPosition($taskElem->getPosition() - 1);
            }
        }
        if ($movement === "up") {
            $tasks = $this->manager->getRepository(Task::class)->findByLowerStartPositionAndGreaterOrEqualEndPosition($positionStart, $positionEnd, $task->getId());
            foreach ($tasks as $taskElem) {
                $taskElem->setPosition($taskElem->getPosition() + 1);
            }
        }
        
        $task->setPosition($positionEnd);
        $this->manager->flush();
        $this->flashBag->add('success', 'The task has been successfully updated !');
        return true;
    }
}
