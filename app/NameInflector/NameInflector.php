<?php

namespace App\NameInflector;

use Rosamarsky\CommandBus\Command;
use Rosamarsky\CommandBus\Inflector;

class NameInflector implements Inflector
{
    public function inflect(Command $command): string
    {
        $arr = explode('\\',get_class($command));
        dd($arr, 'App\Handlers\\' . $arr[count($arr) - 1] . $arr[count($arr) - 1] . 'Handler');

        return  'App\Handlers\\' . $arr[count($arr) - 1] . 'Handler';
    }



}
