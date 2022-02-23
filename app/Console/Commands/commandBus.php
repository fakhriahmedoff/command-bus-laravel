<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Artisan;
class commandBus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:commandbus {folder}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      //  Log::log('info', $this->argument('folder'));
        //Commands
        Artisan::call('generate php:class "Commands/'.$this->argument('folder').'Commands/Create'.$this->argument('folder').'" --extends "Command" --constructor');
        Artisan::call('generate php:class "Commands/'.$this->argument('folder').'Commands/Update'.$this->argument('folder').'" --extends "Command" --constructor');
        Artisan::call('generate php:class "Commands/'.$this->argument('folder').'Commands/Delete'.$this->argument('folder').'" --extends "Command" --constructor');

        
        //Handler
        Artisan::call('generate php:class "Handlers/'.$this->argument('folder').'Handler/Create'.$this->argument('folder').'"');
        Artisan::call('generate php:class "Handlers/'.$this->argument('folder').'Handler/Update'.$this->argument('folder').'"');
        Artisan::call('generate php:class "Handlers/'.$this->argument('folder').'Handler/Delete'.$this->argument('folder').'"');

        return rand(1,555555555555);
    }
}
