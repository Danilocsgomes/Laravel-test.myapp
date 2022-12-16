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
    protected $signature = 'class{courseName}';

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
       dd( 'name course is: '.$this->argument('courseName'));
    }
}
