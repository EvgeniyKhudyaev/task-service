<?php

namespace App\Domain\ValueObject;

class TaskId
{
    private string $id;

    public function __construct(string $id)
    {
//        if (!\Ramsey\Uuid\Uuid::isValid($id)) {
//            throw new \InvalidArgumentException("Invalid Task ID");
//        }

        $this->id = $id;
    }

    public function value(): string
    {
        return $this->id;
    }

    public function equals(TaskId $other): bool
    {
        return $this->id === $other->id;
    }
}
