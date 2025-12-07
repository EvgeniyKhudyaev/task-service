<?php

namespace App\UI\Controller;

use App\Domain\Entity\Task;
use App\Domain\Enum\TaskStatus;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/test-task', name: 'test_task')]
    public function createTask(EntityManagerInterface $em): Response
    {
        // Создаём новую задачу
        $task = new Task();
        $task->setTitle('Тестовая задача');
        $task->setDescription('Это проверочная задача');
        $task->setStatus(TaskStatus::PENDING);

        // Сохраняем в базе
        $em->persist($task);
        $em->flush();

        return new Response('Задача создана с ID: ' . $task->getId());
    }
}
