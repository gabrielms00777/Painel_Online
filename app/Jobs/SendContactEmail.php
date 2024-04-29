<?php

namespace App\Jobs;

use App\Mail\ContactMessageReceived;
use App\Models\ContactMessage;
use App\Models\SiteConfig;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

// class SendContactEmail implements ShouldQueue
class SendContactEmail
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        // public readonly ContactMessage $contactMessage
    )
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // $configs = SiteConfig::getConfig();
        // Mail::to($configs->contact_email, $configs->contact_name)->send(new ContactMessageReceived($this->contactMessage));
        Mail::to('admin@admin.com', 'Gabriel')->send(new ContactMessageReceived());
    }
}
