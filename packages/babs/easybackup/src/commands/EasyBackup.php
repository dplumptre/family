<?php

namespace Babs\Easybackup\Commands;

use Illuminate\Console\Command;
use Babs\Easybackup\Lib\DbBackup;

class EasyBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'easybackup:db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup up your DB using the Easybackup Laravel Package';

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
     * @param DbBackup $db
     * @return mixed
     */
    public function handle(DbBackup $db)
    {
        $db->backup();
    }
}
