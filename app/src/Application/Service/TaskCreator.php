<?php

namespace App\Application\Service;

use App\Application\DTO\CreateTaskDto;
use App\Domain\Entity\Task;
use App\Domain\Repository\TaskRepositoryInterface;

readonly class TaskCreator
{
    public function __construct(
        private TaskRepositoryInterface $repository,
    ) {}

    public function create(CreateTaskDto $dto): Task
    {
        $task = Task::create(
            $dto->title,
            $dto->description,
            $dto->priority,
            $dto->dueDate,
            $dto->assigneeId
        );

        $this->repository->save($task);

        return $task;
    }
}
