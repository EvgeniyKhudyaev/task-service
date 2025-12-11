<?php

namespace App\Application\Service;

use App\Application\DTO\ChangeStatusDto;
use App\Domain\Entity\Task;
use App\Infrastructure\Repository\TaskRepository;

class TaskStatusChanger
{
    public function __construct(private TaskRepository $repository) {}

    public function changeStatus(ChangeStatusDto $dto): Task
    {
        $task = $this->repository->find($dto->taskId);
        if (!$task) {
            throw new \DomainException('Task not found');
        }

        $task->changeStatus($dto->status); // проверка допустимых переходов внутри Task

        $this->repository->save($task);

        return $task;
    }
}
