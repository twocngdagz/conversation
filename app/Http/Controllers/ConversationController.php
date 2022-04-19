<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConversationRequest;
use App\Services\Conversation;

class ConversationController extends Controller
{
    public function __invoke(Conversation $conversational, ConversationRequest $request)
    {
        $context = $conversational->get($request->get('message'));

        return response()->json([
            'response_id' => $request->get('conversation_id'),
            'response' => $context->message()
        ]);
    }
}
