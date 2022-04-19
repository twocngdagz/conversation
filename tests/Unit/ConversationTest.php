<?php

namespace Tests\Unit;

use App\Enums\ContextEnum;
use App\Services\Conversation;
use PHPUnit\Framework\TestCase;

class ConversationTest extends TestCase
{
    /**
    * @test
    */
    public function it_should_return_welcome_enum()
    {
        $conversation = new Conversation();
        $this->assertEquals(ContextEnum::WELCOME, $conversation->get('Hello there'));
    }

    /**
     * @test
     */
    public function it_should_return_goodbye_enum()
    {
        $conversation = new Conversation();
        $this->assertEquals(ContextEnum::GOODBYE, $conversation->get('Bye there'));
    }

    /**
     * @test
     */
    public function it_should_return_no_context_enum()
    {
        $conversation = new Conversation();
        $this->assertEquals(ContextEnum::NO_CONTEXT, $conversation->get('asdfasdf asdfasdf'));
    }
}
