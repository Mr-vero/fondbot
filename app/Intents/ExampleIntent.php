<?php

declare(strict_types=1);

namespace Bot\Intents;

use FondBot\Conversation\Intent;
use FondBot\Events\MessageReceived;
use FondBot\Conversation\Activators\Activator;

class ExampleIntent extends Intent
{
    /**
     * Intent activators.
     *
     * @return Activator[]
     */
    public function activators(): array
    {
        return [
            $this->exact('/start'),
            $this->exact('hello'),
            $this->exact('hi'),
        ];
    }

    public function run(MessageReceived $message): void
    {
        $this->sendMessage('Hello, '.$this->getUser()->getUsername().'!');
    }
}
