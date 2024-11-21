<?php

declare(strict_types=1);

namespace App\Enums;

enum TaskStatus: string
{
    case PENDING = "pending";
    case RUNNING = "in progress";
    case COMPLATED = "complated";
}
