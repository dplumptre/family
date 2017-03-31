<?php

namespace App\Console\Commands;

use App\Lib\ProcessElapsedPair;
use Illuminate\Console\Command;

class UpdateElapsedPayers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-pair';

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
     * @param ProcessElapsedPair $processElapsedPair
     * @return mixed
     */
    public function handle(ProcessElapsedPair $processElapsedPair)
    {
        $processElapsedPair->processElapsedPairRows();
    }
}
