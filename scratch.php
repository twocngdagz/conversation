<?php


use Illuminate\Support\Str;

$conversation = New \App\Services\Conversation();

$conversation->get('Goodbye there');

/*Str::contains(Str::lower('Bye there'), ['goodbye', 'bye']);*/
