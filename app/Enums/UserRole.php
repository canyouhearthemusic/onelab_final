<?php

namespace App\Enums;

use App\Enums\Concerns\HasOptions;

enum UserRole: int
{
    use HasOptions;

    case USER = 0;
    case ADMIN = 1;

    public function label(): string
    {
        return match ($this) {
            self::USER => 'User',
            self::ADMIN => 'Admin',
        };
    }
}