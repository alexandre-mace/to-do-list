<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends Controller
{
    /**
     * @Route("/", name="task_list")
     */
    public function listAction(Request $request)
    {
        return $this->render('task/list.html.twig', [
            'tasks' => $this->get('session')->get('tasks'),
        ]);
    }

    /**
     * @Route("/add", name="task_add")
     */
    public function addAction(Request $request)
    {
        if ($request->getMethod() === "POST") {
            $username = $request->request->get('username');
            $title = $request->request->get('title');
            $description = $request->request->get('description');

            $tasks = $this->get('session')->get('tasks');
            $tasks[] = new Task($title, $description, false, new User($username));

            $this->get('session')->set('tasks', $tasks);
            return $this->redirectToRoute('task_list');
        }
        return $this->render('task/add.html.twig', [
            'task' => 'task',
        ]);
    }

    /**
     * @Route("/update/{id}", name="task_update")
     */
    public function updateAction(Request $request, $id)
    {
        foreach ($this->get('session')->get('tasks') as $key => $value) {
            if ($value->getId() == $id) {
                if ($value->getComplete()) {
                    $value->setComplete(false);
                } else {
                    $value->setComplete(true);

                }
            }
        }
        return $this->redirectToRoute('task_list');
    }

    /**
     * @Route("/delete/{id}", name="task_delete")
     */
    public function deleteAction(Request $request, $id)
    {
        $tasks = array();
        foreach ($this->get('session')->get('tasks') as $key => $value) {
            if ($value->getId() !== $id) {
                $tasks[] = $value;
            }
        }
        $this->get('session')->set('tasks', $tasks);
        return $this->redirectToRoute('task_list');
    }
}
