<?php

namespace App\Domain\Enum;

enum TaskPriority: string
{
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';
    case CRITICAL = 'critical';

    public function label(): string
    {
        return match ($this) {
            self::LOW => 'Низкий приоритет',
            self::MEDIUM => 'Средний приоритет',
            self::HIGH => 'Высокий приоритет',
            self::CRITICAL => 'Критичный приоритет',
        };
    }
}
