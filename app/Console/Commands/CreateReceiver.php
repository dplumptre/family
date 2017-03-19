<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateReceiver extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'familyapp:create-receiver';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command creates receiver rows in the database';

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
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
