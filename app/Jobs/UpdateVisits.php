<?php

namespace App\Jobs;

use App\Models\Visit;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

// class UpdateVisits implements ShouldQueue
class UpdateVisits
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public readonly string $cookie_id,
        public readonly string $path,
        public readonly string $ip,
    )
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $existsVisit = Visit::query()->where('cookie_id', $this->cookie_id)->where('path', $this->path)->exists();
        if(!$existsVisit){
            Visit::query()->create([
                'cookie_id' => $this->cookie_id,
                'path' => $this->path,
                'ip' => $this->ip,
            ]);
        }
    }
}
