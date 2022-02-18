<?php

namespace App\Handlers\Posts;

use Rosamarsky\CommandBus\Command;
use Rosamarsky\CommandBus\Handler;
use function dd;

class CreatePostHandler implements Handler
{
    public function handle(Command $command)
    {
        dd($command->title);
        // TODO: Implement handle() method.
    }
}
