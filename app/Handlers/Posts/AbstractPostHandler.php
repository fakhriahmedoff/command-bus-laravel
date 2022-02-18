<?php

namespace App\Handlers\Posts;

use App\Commands\PostCommands\CreatePost;
use function dd;

class AbstractPostHandler
{
    public function save(CreatePost $command, $model){
        dd($command, $model);
    }
}
