<?php

namespace App\Services;

use App\Enums\ContextEnum;
use Illuminate\Support\Str;
use Psy\Context;

class Conversation implements Conversational
{
    protected array $context = [
        'WELCOME' => [
            'hello', 'hi'
        ],
        'GOODBYE' => [
            'goodbye', 'bye'
        ]
    ];

    public function get($message) : ContextEnum
    {
        foreach ($this->context as $key => $context) {
            if (Str::contains(Str::lower($message), $context)) {
                return match ($key) {
                    'WELCOME' => ContextEnum::WELCOME,
                    'GOODBYE' => ContextEnum::GOODBYE,
                };
            }
        }

        return ContextEnum::NO_CONTEXT;
    }
}
