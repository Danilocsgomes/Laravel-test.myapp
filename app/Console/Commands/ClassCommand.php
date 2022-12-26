<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClassCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'class {courseName : course name} {LaravelVersion?} {--all : show is quantity all modules}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command test in class';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if(!$this->option('all') && $this->argument('LaravelVersion')) {
            dd("name course is: {$this->argument('courseName')} version the framework: {$this->argument('LaravelVersion')}");
        } else if (!$this->option('all')) {
            dd("name course is: {$this->argument('courseName')}");
        }

        if($this->option('all')) {
            if($this->argument('LaravelVersion')) {
                dd("name course is: {$this->argument('courseName')} version the framework: {$this->argument('LaravelVersion')} and have quantity modules: {$this->option('all')}");
            } else {
                dd("name course is: {$this->argument('courseName')} and have quantity modules: 18");
            }

        }
    }
}
