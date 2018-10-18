<?php

namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class TaskSessionHandler {

	private $session;

	public function __construct(SessionInterface $session) {
		$this->session = $session;
	}
	
	public function loadAll() {
		$tasks = $this->session->get('tasks');
		return $tasks;
	}
	
	public function loadOne($taskId) {
        foreach ($this->loadAll() as $value) {
            if ($value->getId() == $taskId) {
            	return $value;
            }
        }
	}

	public function setTasks($tasks) {
        $this->session->set('tasks', $tasks);
	}

	public function deleteOne($taskId) {
        $newTasks = [];
        foreach ($this->loadAll() as $task) {
            if ($task->getId() !== $taskId) {
                $newTasks[] = $task;
            }
        }
        return $newTasks;
	} 
}