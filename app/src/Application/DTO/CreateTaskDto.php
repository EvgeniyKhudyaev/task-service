<?php

namespace App\Application\DTO;

use App\Domain\Enum\TaskPriority;

class CreateTaskDto
{
    public function __construct(
        public string $title,
        public ?string $description,
        public ?\DateTimeImmutable $dueDate,
        public ?string $assigneeId,
        public TaskPriority $priority,
    ) {}
}
