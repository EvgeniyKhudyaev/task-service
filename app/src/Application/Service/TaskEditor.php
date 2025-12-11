<?php

namespace App\Application\Service;

use App\Application\DTO\EditTaskDto;
use App\Domain\Entity\Task;
use App\Infrastructure\Repository\TaskRepository;

class TaskEditor
{
    public function __construct(private TaskRepository $repository) {}

    public function edit(string $taskId, EditTaskDto $dto): Task
    {
        $task = $this->repository->find($taskId);
        if (!$task) {
            throw new \DomainException('Task not found');
        }

        if ($dto->title !== null) {
            $task->rename($dto->title);
        }

        if ($dto->description !== null) {
            $task->changeDescription($dto->description);
        }

        if ($dto->priority !== null) {
            $task->changePriority($dto->priority);
        }

        if ($dto->dueDate !== null) {
            $task->changeDueDate($dto->dueDate);
        }

        if ($dto->assigneeId !== null) {
            $task->assignTo($dto->assigneeId);
        }

        $this->repository->save($task);

        return $task;
    }
}
