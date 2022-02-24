<?php

namespace App\Handlers\Posts;
use Rosamarsky\CommandBus\Handler; use Rosamarsky\CommandBus\Command;

class CreatePostHandler extends AbstractPostHandler implements Handler  {

    public function handle(Command $command)
    {
        dd($command);
    // TODO: Implement handle() method.
    }


}
