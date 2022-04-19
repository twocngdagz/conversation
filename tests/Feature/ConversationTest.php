<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ConversationTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_return_welcome_response()
    {
        $response = $this->post('api/conversation', [
            'conversation_id' => 123,
            'message' => 'Hello I\'m John'
        ]);

        $response
            ->assertJson(fn (AssertableJson $json) =>
            $json->where('response_id', 123)
                ->where('response', 'Welcome to StationFive.')
            );
    }

    /**
     * @test
     */
    public function it_should_return_goodbye_response()
    {
        $response = $this->post('api/conversation', [
            'conversation_id' => 123456,
            'message' => 'Goodbye everyone.'
        ]);

        $response
            ->assertJson(fn (AssertableJson $json) =>
            $json->where('response_id', 123456)
                ->where('response', 'Thank you, see you around.')
            );
    }

    /**
     * @test
     */
    public function it_should_return_no_context_response()
    {
        $response = $this->post('api/conversation', [
            'conversation_id' => 123456,
            'message' => 'asdfasdfasd'
        ]);

        $response
            ->assertJson(fn (AssertableJson $json) =>
            $json->where('response_id', 123456)
                ->where('response', 'Sorry, I don\'t understand.')
            );
    }
}
