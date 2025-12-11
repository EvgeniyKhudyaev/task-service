<?php

namespace App\Application\DTO;

use App\Domain\Enum\TaskStatus;

class ChangeStatusDto
{
    public function __construct(
        public string $taskId,
        public TaskStatus $status,
    ) {}
}
