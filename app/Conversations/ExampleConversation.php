<?php

namespace App\Conversations;

use Botman\BotMan\Messages\Conversations\Conversation;

class ExampleConversation extends Conversation
{
    public function run()
    {
        $this->ask('What is your name?', function ($answer) {
            $this->say('Nice to meet you, ' . $answer->getText());
        });
    }
}