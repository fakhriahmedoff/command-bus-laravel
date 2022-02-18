<?php

namespace App\Providers\CommandBus;

use Rosamarsky\CommandBus\Command;

class NameInflector extends \Rosamarsky\CommandBus\NameInflector
{
    public function inflect(Command $command): string
    {
        return str_replace(['\\Commands\\', 'Command'], ['\\Handlers\\', ''], get_class($command)) . 'Handler';
    }

}
