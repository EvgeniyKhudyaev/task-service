<?php

namespace App\Application\Service;

use App\Domain\ValueObject\TaskId;
use App\Infrastructure\Repository\TaskRepository;

readonly class TaskRemover
{
    public function __construct(private TaskRepository $repository) {}

    public function delete(TaskId $taskId): void
    {
        $task = $this->repository->find($taskId->value());

        if ($task === null) {
            throw new \DomainException('Задача не найдена');
        }

        $this->repository->delete($task);
    }
}
