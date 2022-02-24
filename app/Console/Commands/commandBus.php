<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Artisan;
class commandBus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:commandbus {model} {table}';

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
        $model = $this->argument('model');
        $table = $this->argument('table');
        //Commands
        Artisan::call('generate php:class "Commands/'.$model.'Commands/Abstract'.$model . '" --constructor --table ' . $table);
        Artisan::call('generate php:class "Commands/'.$model.'Commands/Create'.$model.'" --extends=Abstract' .$model .' --implements "Command" ');
        Artisan::call('generate php:class "Commands/'.$model.'Commands/Update'.$model.'" --extends=Abstract' .$model .' --implements "Command" ');
        Artisan::call('generate php:class "Commands/'.$model.'Commands/Delete'.$model.'" --extends=Abstract' .$model .' --implements "Command"');

        //Handler
        Artisan::call('generate php:class "Handlers/'.$model . 's'.'/Create'.$model.'Handler"' . ' --implements Handler --extends=' .'Abstract'.$model.'Handler');
        Artisan::call('generate php:class "Handlers/'.$model . 's'.'/Delete'.$model.'Handler"' . ' --implements Handler --extends=' .'Abstract'.$model.'Handler');
        Artisan::call('generate php:class "Handlers/'.$model . 's'.'/Update'.$model.'Handler"' . ' --implements Handler --extends=' .'Abstract'.$model.'Handler');
        Artisan::call('generate php:class "Handlers/'.$model . 's'.'/Abstract'.$model.'Handler"' );
    }
}
