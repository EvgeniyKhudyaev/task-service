<?php

namespace App\Application\DTO;

use App\Domain\Enum\TaskPriority;

class EditTaskDto
{
    public function __construct(
        public ?string $title,
        public ?string $description,
        public ?string $assigneeId,
        public ?TaskPriority $priority,
        public ?\DateTimeImmutable $dueDate,
    ) {}
}
