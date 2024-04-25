<?php

namespace App\Console\Commands;

use App\Models\OnlineUser;
use Illuminate\Console\Command;

class CleanInactiveUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'onlineusers:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove os usuários inativos há mais de 15 minutos';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        OnlineUser::where('last_activity', '<', now()->subMinutes(5))->delete();
    }
}
