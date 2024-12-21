<?php

namespace App\Http\Controllers;

use Botman\BotMan\BotMan;
use App\Conversations\ExampleConversation;


class Botman extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('Hi', function (BotMan $bot) {
            $bot->startConversation(new ExampleConversation);
        });

        $botman->listen();
    }

    public function startConversation(BotMan $bot)
    {
        $bot->startConversation(new ExampleConversation());
    }
}