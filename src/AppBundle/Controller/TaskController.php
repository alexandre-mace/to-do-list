<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Service\TaskSessionHandler;

class TaskController extends Controller
{
    /**
     * @Route("/", name="task_list")
     */
    public function listAction(Request $request, TaskSessionHandler $taskSessionHandler)
    {
        return $this->render('task/list.html.twig', [
            'tasks' => $taskSessionHandler->loadAll(),
        ]);
    }

    /**
     * @Route("/add", name="task_add")
     */
    public function addAction(Request $request, TaskSessionHandler $taskSessionHandler)
    {
        if ($request->getMethod() === "POST") {
            $username = $request->request->get('username');
            $title = $request->request->get('title');
            $description = $request->request->get('description');
            $tasks = $taskSessionHandler->loadAll();
            $tasks[] = new Task($title, $description, false, new User($username));

            $taskSessionHandler->setTasks($tasks);
            return $this->redirectToRoute('task_list');
        }
        return $this->render('task/add.html.twig', [
            'task' => 'task',
        ]);
    }

    /**
     * @Route("/update/{id}", name="task_update")
     */
    public function updateAction(Request $request, $id, TaskSessionHandler $taskSessionHandler)
    {
        $task = $taskSessionHandler->loadOne($id);
        $task->setComplete(!$task->getComplete());
        return $this->redirectToRoute('task_list');
    }

    /**
     * @Route("/delete/{id}", name="task_delete")
     */
    public function deleteAction(Request $request, $id, TaskSessionHandler $taskSessionHandler)
    {
        $newTasks = $taskSessionHandler->deleteOne($id);
        $taskSessionHandler->setTasks($newTasks);
        return $this->redirectToRoute('task_list');
    }
}
