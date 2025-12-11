<?php

namespace App\Domain\Repository;

use App\Domain\Entity\Task;

interface TaskRepositoryInterface
{
    public function save(Task $task): void;
    public function delete(Task $task): void;
}
