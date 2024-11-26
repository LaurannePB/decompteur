<?php

namespace App\Enum;

enum Category: int
{
    case MOTIVATION = 0;
    case HELP = 1;
    case CAT = 2;

    /**
     * @return string
     */
    public function get_label(): string
    {
        return match ($this)
        {
            self::MOTIVATION => 'Motivation',
            self::HELP       => 'Help',
            self::CAT        => 'Cat'
        };
    }
}
