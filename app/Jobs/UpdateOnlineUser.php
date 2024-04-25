<?php

namespace App\Jobs;

use App\Models\OnlineUser;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

// class UpdateOnlineUser implements ShouldQueue
class UpdateOnlineUser
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public readonly string $session_id,
        public readonly string $url,
        public readonly string $ip,
        public readonly Carbon $last_activity,
    )
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $onlineUser = OnlineUser::query()
                                        ->updateOrCreate([
                                            'session_id' => $this->session_id
                                        ],[
                                            'url' => $this->url,
                                            'ip' => $this->ip,
                                            'last_activity' => $this->last_activity
                                        ]);
        // dd($onlineUser);
    }
}
