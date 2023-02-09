<?php

namespace App\Enums;

enum Status: string
{
    case PENDING = 'P';
    case APROVED = 'A';
    case CANCELED = 'C';
}
