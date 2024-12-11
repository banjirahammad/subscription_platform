<?php

namespace App\Jobs;

use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendPostEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        private string $email,
        private Post $post
    )
    {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::raw(
            "New post: {$this->post->title}\n\n{$this->post->description}",
            function ($message) {
                $message->to($this->email)
                    ->subject("New post from {$this->post->website->name}");
            }
        );
    }
}
