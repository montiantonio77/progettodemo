<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;

use Illuminate\Console\Command;

class CheckDBConnection extends Command
{
    protected $signature = 'check:db';

    protected $description = 'Check database connection';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        try {
            DB::connection()->getPdo();
            $this->info('Connessione al database stabilita con successo.');
        } catch (\Exception $e) {
            $this->error('Impossibile connettersi al database: ' . $e->getMessage());
        }
    }
}
