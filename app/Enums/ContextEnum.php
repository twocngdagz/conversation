<?php

namespace App\Enums;

enum ContextEnum
{
    case WELCOME;
    case GOODBYE;
    case NO_CONTEXT;

    public function message(): string
    {
        return match($this)
        {
            self::WELCOME => 'Welcome to StationFive.',
            self::GOODBYE => 'Thank you, see you around.',
            self::NO_CONTEXT => 'Sorry, I don\'t understand.',
        };
    }
}
