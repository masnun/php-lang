<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class scrap extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'scrap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrap all listed site content and save that to database';

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
     * @return void
     */
    public function fire()
    {
        // the main scraper logic will be placed here
        // @TODO: building scraper
        $this->info('Command is working');
    }

}