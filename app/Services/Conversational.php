<?php

namespace App\Services;

use App\Enums\ContextEnum;

interface Conversational
{
    public function get($message) : ContextEnum;
}
