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
        public readonly ?string $cookie_id = null,
        public readonly string $path,
        public readonly ?string $ip = null,
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
        // dd($existsVisit, $this->cookie_id,$this->path, $this->ip);
        if(!$existsVisit){
            Visit::query()->create([
                'cookie_id' => $this->cookie_id,
                'path' => $this->path,
                'ip' => $this->ip,
            ]);
        }
    }
}
