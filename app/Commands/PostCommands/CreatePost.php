<?php

namespace App\Commands\PostCommands;

use Rosamarsky\CommandBus\Command;

class CreatePost implements Command
{
    public ?string $title;

    /**
     * @param string|null $title
     */
    public function __construct(?string $title)
    {
        $this->title = $title;
    }


}
