<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

// Import
use PHPLang\DataSource\HackerNews;
use PHPLang\DataSource\Github;
use PHPLang\DataSource\PlanetPHP;
use PHPLang\DataSource\StackOverflow;


class TestCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test Custom Code';


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
        $src = new PlanetPHP();
        $src->scrape();
    }


}