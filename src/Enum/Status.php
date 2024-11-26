<?php

namespace App\Enum;

enum Status: int
{
    case IN_WAITING = 0;
    case VALIDATED = 1;

    /**
     * @return string
     */
    public function get_label(): string
    {
        return match ($this)
        {
            self::IN_WAITING => 'Waiting for validation',
            self::VALIDATED  => 'Validated'
        };
    }
}
