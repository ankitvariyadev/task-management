<?php

declare(strict_types=1);

namespace App\Enums;

use App\Enums\Traits\SelectionBox;

enum EmployeePositions: string
{
    use SelectionBox;

    case BACKEND_DEVLOPER = "Backend Devloper";
    case FRONTEND_DEVLOPER = "Frontend Devloper";
    case FULL_STACK_DEVLOPER = "Full Stack Devloper";
}
