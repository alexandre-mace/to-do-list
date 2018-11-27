<?php

namespace AppBundle\Handler;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use AppBundle\Entity\Task;
use AppBundle\Service\Handler\Handler;

class CheckTaskHandler extends Handler
{
    public function handle($task, $newData = false)
    {
        $task->setComplete(!$task->getComplete());
        parent::handle($task);
    }

    public function addFlash()
    {
        $this->flashBag->add('success', 'The new task has been successfully updated !');
    }
}